<template>
  <el-tooltip :content="trans('core.tooltip.wilayah.and endpoint')">
      <el-button 
      type="primary"
      :style="{
            height: '50px',
              width: '50px',
              'margin-bottom': '10px',
              'margin-left': '-55px !important',
              transition: '0.5s'}"
      class="btn btn-child-add"
      circle
      @click="click"
      >
        <span v-html='`<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27.93 31.35" style="width: 15px;height: 20px;"><title>odp</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path d="M0,31.35H8.5v-4H0v4ZM26.92,0H27a.78.78,0,0,1,.21,0l0,0h.07l0,0h.08l0,0h0l.07,0h0a.75.75,0,0,1,.15.16,1.1,1.1,0,0,1,.17.32,1.55,1.55,0,0,1,0,.21V1h0a.25.25,0,0,1,0,.08v0s0,.07,0,.11L24.74,17A16.57,16.57,0,0,1,8.5,30.35h0v-2a14.56,14.56,0,0,0,14-10.44A16.56,16.56,0,0,1,9.11,24.68H8.5v1H0v-4H8.5v1h.61A14.55,14.55,0,0,0,22.84,13,16.56,16.56,0,0,1,10.05,19H8.5v1H0V16H8.5v1h1.55A14.56,14.56,0,0,0,23.24,8.6a16.54,16.54,0,0,1-11.6,4.74H8.5v1H0v-4H8.5v1h3.14A14.58,14.58,0,0,0,23.53,5.19a16.54,16.54,0,0,1-8.71,2.48H8.5v1H0v-4H8.5v1h6.32A14.51,14.51,0,0,0,25.11,1.4L26.21.31a.52.52,0,0,1,.11-.1A1.1,1.1,0,0,1,26.64,0l.21,0h.07Z" style="fill:#fff;fill-rule:evenodd"></path></g></g>
              </svg>`'></span>
    </el-button>
  </el-tooltip>
</template>

<script>
export default {
    methods: {
        click() {
            this.$emit('click', true)
        }
    }
}
</script>

<style>

</style>