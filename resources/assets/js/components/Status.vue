<template>
  <span class="label label-primary"
    :class="[
        {'label-warning' : status == '待审核'},
        {'label-info' : status == '审核中'},
        {'label-success' : status == '审核通过'},
        {'label-danger' : status == '审核不通过'},
        {'status': statusClass}
        ]
      ">{{status}}</span>
</template>

<script>
export default {
  props: {
      status: {
          type: String,
          default: '待审核'
      },
      statusClass: {
          type: Boolean,
          default: true
      }
  }
}
</script>

<style lang="css">
  .status {
      margin-left: 8px
  }
</style>
