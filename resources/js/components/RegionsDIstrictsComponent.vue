<template>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="region">Region</label>
                <select id="region" name="region_id" class="form-control" v-model="region_id" v-on:change="updateDistricts">
                    <option v-for="region in regions" :value="region.id">{{ region.name }}</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="district">District</label>
                <select name="district_id" id="district" class="form-control" v-model="district_id">
                    <option v-for="district in filtered_districts" :value="district.id">{{ district.name }}</option>
                </select>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                district_id: '',
                region_id: '',
                filtered_districts: [],
            }
        },
        props: {
            regions: Array,
            districts: Array,
        },
        methods: {
            updateDistricts: function () {
                var selected_region_id = this.region_id;
                this.filtered_districts = this.districts.filter(district => {
                    return district.region_id === selected_region_id;
                });

                if (this.filtered_districts.length === 0){
                    console.log('No districts found for selected region')
                }
            }
        },
    }
</script>
