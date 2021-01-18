<template>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>URL</th>
                <th>CSS3</th>
                <th>Content</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="article in articles" v-bind:key="article.id">
                <td>{{ article.id }}</td>
                <td>{{ article.URL }}</td>
                <td>{{ article.CSS3 }}</td>
                <td>{{ article.content }}</td>
            </tr>
        </tbody>
    </table>
</template>

<script>
const { default: Axios } = require("axios");

export default {
    data() {
        return {
            articles: null
        };
    },
    mounted() {
        Axios.get('api/articles').then(response => (this.articles = response.data));
    }
}
</script>