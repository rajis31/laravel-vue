<template>
<div>
    <form @submit.prevent="">
        <input type="text" v-model="age" placeholder="age" />
        <input type="text" v-model="name" placeholder="name" />
        <select v-model="color">
            <option>red</option>
            <option>green</option>
            <option>blue</option>
        </select>
        <button @click="sendData">Submit</button>
    </form>    
    <p> {{ color }} </p>
</div>
</template>

<script>
export default {
    name: "PlayForm",
    data(){
        return {
        age:"",
        name:"",
        color:"",
        }
    },
    methods: {
        sendData(){
            const that = this;
            axios.post("/store",{age: that.age, name: that.name, color: that.color})
                 .then(response => console.log(response));
        }
    },
    
}
</script>

