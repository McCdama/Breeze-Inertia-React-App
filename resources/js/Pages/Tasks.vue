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
                        {{ header }}
                    </div>
                </div>
            </div>
        </div>
                
        <div class="py-12">
           <form action="/task" method="POST" class="form-horizontal">
                {{ csrf_field() }}


            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Task</label>
 
                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Task
                    </button>
                </div>
            </div>
                            
           </form>
        </div>
        
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <li v-for="item in tasks" :key="item.id">
                            <strong> {{ item.name }} </strong>
                        </li>
                    </div>
                </div>
            </div>
        </div>
    
    </body>
</template>


<script>
export default {
  props: {
    header: String,
    tasks: Array
  },
}
</script>