
@extends('layouts.manage')

@section('content')
    <div class="flex-container">
        <div class="columns m-t-30">
            <div class="column">
                <h1 class="title">Create New Permission</h1>
            </div>
        </div>
        <hr class="m-t-0"/>

        <div class="columns">
            <div class="column">
                <form action="{{route('permissions.store')}}" method="POST">
                    {{csrf_field()}}

                    <div class="block">
                        <b-radio-group v-model="permissionType">
                            <b-radio name="permission_type" value="basic">Basic Permission</b-radio>
                            <b-radio name="permission_type" value="crud">CRUD Permission</b-radio>
                        </b-radio-group>
                    </div>

                    <div class="field" v-if="permissionType == 'basic'">
                        <label for="display_name" class="label">Name (Display Name)</label>
                        <p class="control">
                            <input type="text" class="input" name="display_name" id="display_name">
                        </p>
                    </div>

                    <div class="field" v-if="permissionType == 'basic'">
                        <label for="name" class="label">Slug</label>
                        <p class="control">
                            <input type="text" class="input" name="name" id="name">
                        </p>
                    </div>

                    <div class="field" v-if="permissionType == 'basic'">
                        <label for="description" class="label">Description</label>
                        <p class="control">
                            <input type="text" class="input" name="description" id="description" placeholder="Describe what this permission does">
                        </p>
                    </div>

                    <div class="field" v-if="permissionType == 'crud'">
                        <label for="resource" class="label">Resource</label>
                        <p class="control">
                            <input type="text" class="input" name="resource" id="resource" v-model="resource" placeholder="The name of the resource">
                        </p>
                    </div>

                    <div class="columns" v-if="permissionType == 'crud'">
                        <div class="column is-one-quarter">
                            <b-checkbox-group v-model="crudSelected">
                                <div class="field">
                                    <b-checkbox custom-value="create">Create</b-checkbox>
                                </div>
                                <div class="field">
                                    <b-checkbox custom-value="read">Read</b-checkbox>
                                </div>
                                <div class="field">
                                    <b-checkbox custom-value="update">Update</b-checkbox>
                                </div>
                                <div class="field">
                                    <b-checkbox custom-value="delete">Delete</b-checkbox>
                                </div>
                            </b-checkbox-group>
                        </div> <!-- end of .column -->

                        <input type="hidden" name="crud_selected" :value="crudSelected">

                        <div class="column">
                            <table class="table" v-if="resource.length >= 3">
                                <thead>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Description</th>
                                </thead>
                                <tbody>
                                <tr v-for="item in crudSelected">
                                    <td v-text="crudName(item)"></td>
                                    <td v-text="crudSlug(item)"></td>
                                    <td v-text="crudDescription(item)"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <button class="button is-success">Create Permission</button>
                </form>
            </div>
        </div>

    </div> <!-- end of .flex-container -->
    {{--<script type="application/javascript">--}}
        {{--var perm = [];--}}
        {{--var rols = [];--}}
    {{--</script>--}}
@endsection
