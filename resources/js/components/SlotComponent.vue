<template>
<div>
  <div>
    <slot name="default"></slot>
  </div>
  <div>
      <slot name="section1" :first="first" ></slot>
  </div>
  </div>
</template>

<script>
export default {
    name:"SlotComponent",
    data(){
        return {
            first: "Raji",
        }
    }
    
}
</script>

<style scoped>

</style>