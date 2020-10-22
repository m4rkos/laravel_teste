@extends('layouts.master')

@section('title', 'List Users')

@section('content')
    <div class="container">
        <div class="card border">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 col-md-10">
                                <h1>List Users here</h1>
                            </div>
                            <div class="col-12 col-md-2">
                                <a class="btn btn-primary" href="/user" role="button">add +</a>
                            </div>
                        </div>


                        <div id="app">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <strong> All Resources</strong>
                                </div>
                                <div class="row">
                                    <div class="search-wrapper panel-heading col-sm-12">
                                        <input class="form-control" type="text" v-model="searchQuery" placeholder="Search" />
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table v-if="resources.length" class="table">
                                        <thead>
                                            <tr>
                                                <th>Resource</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr v-for="item in resultQuery">
                                                <td><a v-bind:href="item.uri" target="_blank">@{{ item.title }}</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('style')

@stop
@section('scripts')

    <script src="../js/vue.js"></script>
    <script>
        new Vue({
            el: '#app',
            data() {
                return {
                    searchQuery: null,
                    resources:[
                        {title:"ABE Attendance",uri:"aaaa.com",category:"a",icon:null},
                        {title:"Accounting Services",uri:"aaaa.com",category:"a",icon:null},
                        {title:"Administration",uri:"aaaa.com",category:"a",icon:null},
                        {title:"Advanced Student Lookup",uri:"bbbb.com",category:"b",icon:null},
                        {title:"Art & Sciences",uri:"bbbb.com",category:"b",icon:null},
                        {title:"Auxiliares Services",uri:"bbbb.com",category:"b",icon:null},
                        {title:"Basic Skills",uri:"cccc.com",category:"c",icon:null},
                        {title:"Board of Trustees",uri:"dddd.com",category:"d",icon:null}
                    ]
                };
            },
            computed: {
                resultQuery(){
                    if(this.searchQuery){
                        return this.resources.filter((item)=>{
                            return this.searchQuery.toLowerCase().split(' ').every(v => item.title.toLowerCase().includes(v))
                        })
                    }else{
                        return this.resources;
                    }
                }
            }

        })
    </script>

@stop
