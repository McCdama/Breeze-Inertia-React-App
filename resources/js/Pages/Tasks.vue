<script setup>
</script>

<template>
    <head>
        <title>Laravel</title>
    </head>
 
    <body>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        Let's get some Task
                    </div>
                </div>

                <div class="form-group">
                    <label for="task" class="col-sm-3 control-label">{{ test }}</label>
                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control">
                </div>
            </div>
        </div>
        </div>
    </body>
</template>


<script>
export default {
  props: {
    test: String,
  },
}
</script>