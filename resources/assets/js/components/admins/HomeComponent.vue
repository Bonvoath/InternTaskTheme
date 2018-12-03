<template>
  <div>
        <ul>
            <li v-for="(ret, index) in items" :key="ret.id">{{index}}{{ret.name}}</li>
        </ul>
        <button type="button" @click="onAddNew">Add</button>
  </div>
</template>
<script>
export default {
    data() {
        return {
            items: []
        };
    },
    mounted: function() {
        console.log("admin home page");
    },
    methods: {
        onAddNew: function(){
            let vm = this;
            this.items.push({
                id: vm.items.length + 1,
                name: 'testing' + vm.items.length + 1
            });
        }
    }
};
</script>