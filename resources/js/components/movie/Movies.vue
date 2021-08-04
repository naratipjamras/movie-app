<template>
    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-12">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Movie List</h3>

                            <div class="card-tools">

                                <button type="button" class="btn btn-sm btn-primary" @click="newModal">
                                    <i class="fa fa-plus-square"></i>
                                    Add New
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Link</th>
                                    <th>Image</th>
                                    <th>Youtube</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="movie in movies.data" :key="movie.id">

                                    <td>{{movie.id}}</td>
                                    <td>{{movie.name}}</td>
                                    <td><a  v-bind:href="movie.link">{{movie.link | truncate(30, '...')}}</a></td>
                                    <td><img v-bind:src="movie.image" width="100" alt="product"></td>
                                    <td>{{movie.youtube | truncate(30, '...')}}</td>

                                    <td>

                                        <a href="#" @click="editModal(movie)">
                                            <i class="fa fa-edit blue"></i>
                                        </a>
                                        /
                                        <a href="#" @click="deleteMovie(movie.id)">
                                            <i class="fa fa-trash red"></i>
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <pagination :data="movies" @pagination-change-page="getResults"></pagination>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="addNew" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" v-show="!editmode">Create New Movie</h5>
                            <h5 class="modal-title" v-show="editmode">Edit Product</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <form @submit.prevent="editmode ? updateMovie() : createMovie()">
                            <div class="modal-body">
<!--                            ===================-->
<!--                            == OMDB SEARCH   ==-->
<!--                            ===================-->
                                <div>
                                    <label>OMDB Search (Optional)</label>
                                    <div class="row">
                                        <div class="col">
                                            <input style="width: 335px!important;" type="text" v-model="omdb" name="omdb"
                                                   class="form-control">
                                        </div>
                                        <div class="col">
                                            <input @click="handleSubmit" style="width: 100px!important;" type="button" value="SEARCH"
                                                    class="btn btn-success"></input>
                                        </div>
                                    </div>

                                </div>


                                <div class="form-group">
                                    <label>Name</label>
                                    <input v-model="form.name" type="text" name="name"
                                           class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
                                    <has-error :form="form" field="name"></has-error>
                                </div>
                                <div class="form-group">
                                    <label>Link (VDO Streaming)</label>
                                    <input v-model="form.link" type="text" name="link"
                                           class="form-control" :class="{ 'is-invalid': form.errors.has('link') }">
                                    <has-error :form="form" field="link"></has-error>
                                </div>
                                <div class="form-group">
                                    <label>Image</label>
                                    <input v-model="form.image" type="text" name="image"
                                           class="form-control" :class="{ 'is-invalid': form.errors.has('image') }">
                                    <has-error :form="form" field="image"></has-error>
                                </div>
                                <div class="form-group">
                                    <label>Youtube</label>
                                    <input v-model="form.youtube" type="text" name="youtube"
                                           class="form-control" :class="{ 'is-invalid': form.errors.has('youtube') }">
                                    <has-error :form="form" field="youtube"></has-error>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button v-show="editmode" type="submit" class="btn btn-success">Update</button>
                                <button v-show="!editmode" type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>



        </div>
    </section>
</template>

<script>
export default {
    name: "Movies",
    data () {
        return {
            omdb: '',
            editmode: false,
            movies : {},
            form: new Form({
                id: '',
                name: '',
                link: '',
                image: '',
                youtube: '',
            }),
            tag:  '',
            autocompleteItems: [],
        }
    },
    methods: {


        handleSubmit(event) {
            event.preventDefault();
            //emit('search', movieTitle.value);
            const API_KEY = '32f246bc';
            // const state = reactive({
            //     search: 'Lord of the rings',
            //     loading: true,
            //     movies: []
            // });
            // watch(() => {
            const MOVIE_API_URL = "https://www.omdbapi.com/?s=" + this.omdb + "&apikey="+API_KEY;
                 fetch(MOVIE_API_URL)
                     .then(response => response.json())
                     .then(jsonResponse => {
                           console.log(jsonResponse);
                           this.form.name=jsonResponse.Search[0].Title;
                           this.form.image=jsonResponse.Search[0].Poster;
            //             state.movies = jsonResponse.Search;
            //             state.loading = false;
                 });
            // });







        },



        getResults(page = 1) {

            this.$Progress.start();
            //http://127.0.0.1:8000/api/movielist
            axios.get('api/movie?page=' + page).then(({ data }) => (this.movies = data.data));
            // axios.get('api/product?page=' + page).then(({ data }) => (this.products = data.data));
            this.$Progress.finish();
        },
        loadMovie(){


            console.log('==============');
            console.log('== MOVIES   ==');
            console.log('==============');
            // if(this.$gate.isAdmin()){
             axios.get("http://127.0.0.1:8000/api/movie").then(({ data }) => (this.movies = data.data));
            /*axios.get("api/movie").then(response => {
                this.movies = response.data;
                console.log(response.data);
            });*/


            // }
        },
        // loadCategories(){
        //     axios.get("/api/category/list").then(({ data }) => (this.categories = data.data));
        // },
        // loadTags(){
        //     axios.get("/api/tag/list").then(response => {
        //         this.autocompleteItems = response.data.data.map(a => {
        //             return { text: a.name, id: a.id };
        //         });
        //     }).catch(() => console.warn('Oh. Something went wrong'));
        // },
        editModal(movie){
            this.omdb='';
            this.editmode = true;
            this.form.reset();
            $('#addNew').modal('show');
            this.form.fill(movie);
        },
        newModal(){
            this.omdb='';
            this.editmode = false;
            this.form.reset();
            $('#addNew').modal('show');
        },
        createMovie(){
            this.$Progress.start();

            console.log('================');
            console.log('== ADD MOVIES ==');
            console.log('================');
            this.form.post('api/movie')
                .then((data)=>{
                    console.log(data);
                    if(data.data.success){
                        $('#addNew').modal('hide');

                        Toast.fire({
                            icon: 'success',
                            title: data.data.message
                        });
                        this.$Progress.finish();
                        this.loadMovie();

                    } else {
                        Toast.fire({
                            icon: 'error',
                            title: 'Some error occured! Please try again'
                        });

                        this.$Progress.failed();
                    }
                })
                .catch(()=>{

                    Toast.fire({
                        icon: 'error',
                        title: 'Some error occured! Please try again'
                    });
                })
        },
        updateMovie(){
            console.log('=======================');
            console.log('== UPDATE MOVIE      ==');
            console.log('=======================');
            this.$Progress.start();
            this.form.put('api/movie/'+this.form.id)
                .then((response) => {
                    console.log(response);
                    // success
                    $('#addNew').modal('hide');
                    Toast.fire({
                        icon: 'success',
                        title: response.data.message
                    });
                    this.$Progress.finish();
                    //  Fire.$emit('AfterCreate');

                    this.loadMovie();
                })
                .catch(() => {
                    this.$Progress.fail();
                    alert('Fail');
                });

        },
        deleteMovie(id){
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {

                // Send request to the server
                if (result.value) {
                    this.form.delete('api/movie/'+id).then(()=>{
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        );
                        // Fire.$emit('AfterCreate');
                        this.loadMovie();
                    }).catch((data)=> {
                        Swal.fire("Failed!", data.message, "warning");
                    });
                }
            })
        },

    },
    mounted() {

    },
    created() {
        this.$Progress.start();

        this.loadMovie();
        // this.loadCategories();
        // this.loadTags();

        this.$Progress.finish();
    },
    filters: {
        truncate: function (text, length, suffix) {
            if(text){
                return text.substring(0, length) + suffix;
            }else{
                return '';
            }
        },
    },
    computed: {
        filteredItems() {
            return this.autocompleteItems.filter(i => {
                return i.text.toLowerCase().indexOf(this.tag.toLowerCase()) !== -1;
            });
        },
    },

}
</script>

<style scoped>

</style>
