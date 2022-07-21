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
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        {{ tasks }}
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