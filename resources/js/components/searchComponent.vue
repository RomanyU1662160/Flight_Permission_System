<template>
    <form method="get" @submit.prevent="send" class="">
        <div class="form-group">
            <input
                name="search"
                id="query"
                type="text"
                class="form-control text-info col-md-12"
                placeholder="Search"
                autofocus
                autocomplete="off"
            />
        </div>
    </form>
</template>

<script>
import autoSearch from "../helpers/autoSearch.jsx";
import autocomplete from "autocomplete.js";
import alogoliasearch from "algoliasearch";

export default {
    data() {
        return {};
    },
    methods: {
        send() {
            return console.log("form submitted");
        }
    },
    mounted() {
        autoSearch("flights").on("autocomplete:selected", function(
            event,
            suggestion,
            dataset,
            context
        ) {
            console.log(event, suggestion, dataset, context);
            window.location.assign(route("flights.show", suggestion.id));
        });
    } // mounted end
}; // end of export default
</script>
