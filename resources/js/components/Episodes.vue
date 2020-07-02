<template>
    <div>
        <b-card no-body class="overflow-hidden mb-2" v-for="(episode, index) in episodes" :key="index">
            <b-row no-gutters>
                <b-col md="2">
                    <b-button>{{episode.episode_number}}</b-button>
                </b-col>
                <b-col md="10">
                 <a :href="episode.url" class="text-decoration-none">
                    <b-card-body :title="episode.title">
                        <b-card-text>
                             {{episode.description}}
                        </b-card-text>
                    </b-card-body>
                 </a>
                </b-col>
            </b-row>
        </b-card>
    </div>
</template>

<script>
export default {
    props:{
        videos: Array,
        seriesid: Number
    },
    computed: {
        episodes() {
            return this.videos.sort(function(a, b){
                return a.episode_number - b.episode_number
                })
        }
    }
}
</script>


<style scoped>
    a{
        color: black;
    }
</style>

