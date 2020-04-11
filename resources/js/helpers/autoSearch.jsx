import autocomplete from "autocomplete.js";
import alogoliasearch from "algoliasearch";

//define algolia api keys
const algoliaClient = alogoliasearch(
    process.env.MIX_ALGOLIA_APP_ID,
    process.env.MIX_ALGOLIA_SEARCH
);

const autoSearch = (tableName, inputName = "#query", hitsNumber = 10) => {
    const index = algoliaClient.initIndex(tableName);
    return autocomplete(inputName, { hint: true }, [
        {
            source: autocomplete.sources.hits(index, {
                hitsPerPage: hitsNumber
            }),
            displayKey: "search",
            templates: {
                suggestion: function(suggestion) {
                    return `
                    <div className="card">
                    <div className="card-header bg-info">
   <h3 className="card-title">${suggestion.callsign}</h3>
</div>
   <div className="card-body bg-info">
     <table class="table table-borderless table-sm">
       <tr>
         <th> Callsign : </th>
         <td>${suggestion.callsign} </td>
         <th> Submission: </th>
         <td class="float-right">
           ${suggestion.submission !== null ? suggestion.submission.ref : "N/A"}
         </td>
       </tr>

       <tr>
         <th> Route</th>
         <td>
           ${suggestion.origin.icao}/ ${suggestion.destination.icao}
         </td>
         <th> Permission: </th>
         <td class="float-right">

           ${suggestion.permission !== null ? suggestion.permission.ref : "N/A"}
         </td>
       </tr>
     </table>
   </div>
 </div>
 </div>
         `;
                }
            }
        }
    ]);
};

export default autoSearch;
