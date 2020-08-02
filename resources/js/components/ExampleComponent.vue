<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ title}}</div>
                    <select v-model="selection">
                        <option v-for="district in districts">{{ district }}</option>
                    </select>
                    <div class="card-body">
                        {{ selection }}
                    </div>
                    <div class="card-body">
                        {{ districts }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                message: 'Hello There!',
                selection: ''
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        props: {
            title: String,
            districts: Array,
        }
    }
</script>
