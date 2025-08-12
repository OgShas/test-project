<template>
    <div class="clock">
        {{ time }}
    </div>
</template>

<script>
export default {
    data() {
        return {
            time: this.getCurrentTime()
        };
    },
    methods: {
        getCurrentTime() {
            const now = new Date();
            return now.toLocaleTimeString();
        }
    },
    mounted() {
        setInterval(() => {
            this.time = this.getCurrentTime();
        }, 1000);
    }
};
</script>

<style scoped>
.clock {
    font-size: 5rem;
    font-family: 'Courier New', monospace;
    background: black;
    color: limegreen;
    padding: 20px 40px;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0,0,0,0.5);
}
</style>
