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
   <h3 className="card-title ">${suggestion.ref}</h3>
</div>
   <div className="card-body ">
     <table class="table table-borderless table-sm">
       <tr class=" ">
         <th class=" border-bottom"> Status : </th>
         <td class=" border-bottom">${suggestion.state.name} </td>
         <th class=" border-bottom"> created at : </th>
         <td class=" border-bottom"> ${suggestion.submitted} </td>
         <th class=" border-bottom"> Requested by  : </th>
         <td class="border-bottom">${suggestion.requester.fname} </td>
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
