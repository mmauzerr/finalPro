@extends('layouts.manage')

@section('content')
    <div class="flex-container">
        <div class="columns m-t-20">
            <div class="column">
                <h1 class="title">Add New Blog Post</h1>
            </div>
            <div class="column">

            </div>
        </div>
        <hr class="m-t-0">

        <form action="{{route('posts.store')}}" method="post">
            {{ csrf_field() }}
            <div class="columns">
                <div class="column is-three-quarters-desktop is-three-quarters-tablet ">
                    <b-field>
                        <b-input type="text" placeholder="Post Title" size="is-large" v-model="title"></b-input>
                    </b-field>
                    <slug-widget
                            url="{{url('/')}}"
                            subdirectory="/blog/"
                            :title="title"
                            @slug-changed="updateSlug"
                    ></slug-widget>
                    <input type="hidden" v-model="slug" name="slug" />
                    <b-field class="m-t-40">
                        <b-input type="textarea" placeholder="Compose your masterpiece..."></b-input>
                    </b-field>
                </div>

                <div class="column is-one-quarter-desktop">
                    <div class="card card-widget">

                        <div class="author-widget widget-area">
                            <div class="selected-author">
                                <img src="https://placehold.it/50x50">
                                <div class="author">
                                    <h4>Nenad Pesic</h4>
                                    <p class="subtitle">(nenmas)</p>
                                </div>
                            </div>
                        </div>

                        <div class="post-status-widget widget-area">
                            <div class="status">
                                <div class="status-icon">
                                    <b-icon icon="assignment" size="is-medium"></b-icon>
                                </div>
                                <div class="status-details">
                                    <h4><span class="status-emphasis">Draft</span> Saved</h4>
                                    <p>A Few Minutes Ago</p>
                                </div>
                            </div>
                        </div>

                        <div class="publish-buttons-widget widget-area">
                            <div class="secondary-action-button">
                                <button class="button is-info is-outlined is-fullwidth">Save Draft</button>
                            </div>
                            <div class="primary-action-button">
                                <button class="button is-primary is-fullwidth">Publish</button>
                            </div>
                        </div>

                    </div>
                </div>

            </div><!-- end of columns div -->

        </form>
    </div><!-- end of flex-container div -->

@endsection
@section('scripts')
    <script>
        var app = new Vue({
            el: '#app',
            data: {
                title: '',
                slug: '',
                api_token: '{!!Auth::user()->api_token!!}'
            },
            methods: {
                updateSlug: function(val) {
                    this.slug = val;
                },
                slugCopied: function(type, msg, val) {
                    notifications.toast(msg, {type: `is-${type}`});
                }
            }
        });
    </script>
    @endsection



