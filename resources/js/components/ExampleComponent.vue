<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>
                    <select v-model="selection">
                        <option>A</option>
                        <option>b</option>
                        <option>c</option>
                        <option>d</option>
                    </select>
                    <div class="card-body">
                        {{ selection }}
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
        }
    }
</script>
