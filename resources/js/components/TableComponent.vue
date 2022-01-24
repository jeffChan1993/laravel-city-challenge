<template>
    <table class="table table-bordered text-center">
        <thead>
        <!--
            if it is production website, we should not duplicate the code
            we can use v-for to loop different elements
        -->
        <tr v-if="option ==0">
            <th>{{$t('id')}}</th>
            <th>{{$t('name')}}</th>
            <th>{{$t('age')}}</th>
        </tr>
        <tr v-if="option ==1">
            <th>{{$t('id')}}</th>
            <th>{{$t('brand')}}</th>
            <th>{{$t('color')}}</th>
            <th>{{$t('license_plate')}}</th>
        </tr>
        <tr v-if="option ==2">
            <th>{{$t('id')}}</th>
            <th>{{$t('name')}}</th>
        </tr>
        <tr v-if="option ==3">
            <th>{{$t('id')}}</th>
            <th>{{$t('full_address')}}</th>
            <th>{{$t('street_name')}}</th>
        </tr>
        </thead>
        <tbody>

        <tr v-if="data == null">
            <td colspan="4">{{ $t('no_record') }}</td>
        </tr>
        <tr v-for="d in data" :key="d.id" v-if="option ==0">
            <td>{{ d.id }}</td>
            <td>{{ d.name }}</td>
            <td>{{ d.age }}</td>
        </tr>
        <tr v-for="d in data" :key="d.id" v-if="option ==1">
            <td>{{ d.id }}</td>
            <td>{{ d.brand }}</td>
            <td>{{ d.color }}</td>
            <td>{{ d.license_plate}}</td>
        </tr>
        <tr v-for="d in data" :key="d.id" v-if="option == 2">
            <td>{{ d.id }}</td>
            <td>{{ d.name }}</td>
        </tr>
        <tr v-for="d in data" :key="d.id" v-if="option == 3">
            <td>{{ d.id }}</td>
            <td>{{ d.address }}</td>
            <td>{{ d.name }}</td>

        </tr>
        </tbody>
    </table>
</template>

<script>
export default {
    name: "TableComponent",
    props:['data','option'],
}
</script>

<style scoped>

</style>
