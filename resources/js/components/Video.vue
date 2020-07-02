<template>
    <div>

        <div id="video-webdemy"></div>

    </div>
</template>

<script>
import Player from '@vimeo/player'
export default {
    props: {
        videofile: Object,
        nextvideourl: String
    },
    computed: {
        url() {
            return this.nextvideourl
        }
    },
    methods: {
        nxtvideoplay() {
            window.location.replace(this.nextvideourl)
        }
    },
    mounted() {

        let videoOptions = {
            id: this.videofile.vimeo_video_id,
            width: 1100
        }
        console.log(this.url)

        let videoPlayer = new Player('video-webdemy', videoOptions)

        videoPlayer.setVolume(1)

        // videoPlayer.on('play', () => {
        //    console.log(this.url)
        // })

        videoPlayer.on('ended', () => {
            if(this.url !== ""){
                window.location.replace(this.url)
            }
        })

    }
}
</script>

<style scoped>

</style>
