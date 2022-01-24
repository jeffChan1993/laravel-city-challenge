<template>
    <table class="table table-bordered text-center">
        <thead>
        <tr>
            <th v-for="item in header[option]">{{$t(item)}}</th>
        </tr>

        </thead>
        <tbody>

        <tr v-if="data == null || data.length ==0">
            <td colspan="4">{{ $t('no_record') }}</td>
        </tr>
        <tr v-for="d in data" :key="d.id">
            <td v-for="item in items[option]">{{ d[item] }}</td>
        </tr>
        </tbody>
    </table>
</template>

<script>
export default {
    name: "TableComponent",
    props:['data','option'],
    data(){
        return {
            header:[['id','name','age'],['id','brand','color','license_plate'],['id','name'],['id','full_address','street_name']],
            items:[['id','name','age'],['id','brand','color','license_plate'],['id','name'],['id','address','name']]
        }
    },
}
</script>

<style scoped>

</style>
