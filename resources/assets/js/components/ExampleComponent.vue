<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.

                        <div class="list-group">
                        <div>
                        <a href="#" class="list-group-item list-group-item-action">
                                <img src="http://vershkoff.ru/storage/cache/images/000/754/IMG-6998v,300.225.85.60.crop.2x.1539160432.jpg" 
                                  alt="album name" 
                                  class="img img-left" 
                                  height="150px">
                                <span class="text-right">
                                    <h4>
                                        album name
                                        <span class="badge badge-secondary">status</span>
                                    </h4>
                                    <p class="well">descriptions</p>
                                </span>
                            </a>               
                        </div>
                    </div> <!-- end list-group -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
