<!-- Modal -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{trans('Dashboard/sections_trans.add_sections')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('admin.store') }}" method="post" autocomplete="off">
                @csrf
                <div class="modal-body">
                    <label for="exampleInputPassword1">{{trans('Dashboard/sections_trans.name_sections')}}</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group col-12 mt-2">
                    <div class="row">
                        {{-- @if (count($groups) > 0)
                            @foreach ($groups as $permission)
                                <div class="col-md-6">
                                    <div class="form-check form-check-primary mt-1">
                                        <input class="form-check-input" type="checkbox"
                                            name="permissionArray[{{ $permission->name }}]"
                                            id="formCheckcolor{{ $permission->id }}">
                                        <label class="form-check-label"
                                            for="formCheckcolor{{ $permission->id }}">{{ $permission->name }}</label>
                                    </div>
                                </div>
                            @endforeach
                        @endif --}}
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{trans('Dashboard/sections_trans.Close')}}</button>
                    <button type="submit" class="btn btn-primary">{{trans('Dashboard/sections_trans.submit')}}</button>
                </div>
            </form>
        </div>
    </div>
</div>
