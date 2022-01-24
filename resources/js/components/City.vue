<template>
    <div class="container my-5">

        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header text-center">
                        <h3 class="text-center">TNT City Search Engine</h3>
                    </div>

                    <div class="card-body">
                        <div class="row" style="margin-bottom: 10px">
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="option_selector">{{ $t('search')}}</label>
                                    </div>
                                    <select class="form-select" id="option_selector" v-model="option" v-on:change="reset">
                                        <option value="0">{{$t('person')}}</option>
                                        <option value="1">{{$t('cars')}}</option>
                                        <option value="2">{{$t('car_owner')}}</option>
                                        <option value="3">{{$t('street_address')}}</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-9">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="option_selector">{{ $t(`value`)[option] }}</label>
                                        </div>
                                        <input type="text" name="parms" class="form-control" v-model="val" v-bind:disabled="option == 0">
                                        <button class="btn btn-success" v-on:click="callAPI">{{$t('submit')}}</button>
                                    </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table-component :data="results" :option="option"></table-component>
                        </div>
                        <pagination v-model="page" :records="totalRecord" :per-page="perPage" @paginate="getResults"/>
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
            results: null,
            page:1,
            totalRecord:0,
            perPage:30,
            option:0,
            val:"TNT"
        }
    },
    mounted() {
        // this.getResults();
    },

    created() {
        // this.axios
        //     .get(`/api/persons`)
        //     .then(response => {
        //         this.results = response.data.data;
        //         this.totalRecord = response.data.total;
        //         this.perPage = response.data.per_page;
        //     });
    },
    methods: {
        getResults(page = 1) {
            this.axios.get('/api/persons?page=' + page)
                .then(response => {
                    this.results = response.data.data;
                });
        },
        callAPI(){
            let url = ['/api/persons','/api/cars?street_name=','/api/owners?license_plate=','/api/houses?name='];

            this.axios.get(url[this.option] + (this.option ==0?'':this.val))
                .then(response =>{
                    this.results = response.data.data;
                    this.totalRecord = (this.option ==0?response.data.total:this.totalRecord);
                    this.perPage = (this.option ==0?response.data.per_page:this.perPage);
                })
        },
        reset(){
            this.page = 1;
            this.totalRecord = 0;
            this.perPage = 1;
            this.results = [];

            this.option ==0 ? this.val ="TNT" :this.val = "";

        }
    }
}
</script>
