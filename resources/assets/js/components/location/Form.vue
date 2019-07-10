<template>
    <form
    @submit.prevent="submit"
    method="post" 
    action="{{route('register')}}">

    <div v-if="alert.message" : class="['alert alert-' + alert.type]">
        <p>{{alert.message}}</p>
    </div>
    <div : class="['form-group', {'has-error' : errors.province}]">
        <label class="control-label">Provinsi</label>
        <select @change="province" v-model="state.province" class="form_control" name="" id="">
            <option value="">Pilih Provinsi</option>
            <option v-for="province in " : value="province.id">{{province.name}}

            </option>
        </select>

    </div>
    </form>
</template>
