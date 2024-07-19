<!-- BEGIN: Modal Content -->
<div id="create-permission-modal" style="padding-top:10%" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="{{ route('permissions.store') }}">
                @csrf
                <!-- BEGIN: Modal Header -->
                <div class="modal-header">
                    <h2 class="font-medium text-base mr-auto">Add Permission</h2> 
                    <br>
                    <p class="lead">
                        Add new permission.
                    </p>                
                    <div class="dropdown sm:hidden"> 
                        <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown"> 
                            <i data-lucide="more-horizontal" class="w-5 h-5 text-slate-500"></i> 
                        </a>
                        <div class="dropdown-menu w-40">
                            <ul class="dropdown-content">
                                {{-- <li> <a href="javascript:;" class="dropdown-item"> <i data-lucide="file" class="w-4 h-4 mr-2"></i> Download  </a> </li> --}}
                            </ul>
                        </div>
                    </div>
                </div> 
                <!-- END: Modal Header -->
                <!-- BEGIN: Modal Body -->
                <div class="modal-body">
                    <div class="col-span-12 sm:col-span-6"> 
                        <label for="modal-form-1" class="form-label">Permission Name</label>
                        <input id="modal-form-1" value="{{ old('name') }}" type="text" name="name" class="form-control" placeholder=""> 
                    </div>
                </div> <!-- END: Modal Body -->
                <!-- BEGIN: Modal Footer -->
                <div class="modal-footer"> 
                    <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Cancel</button> 
                    <button type="submit" class="btn btn-primary w-30">Save Permission</button> 
                </div> <!-- END: Modal Footer -->
            </form>
        </div>
    </div>
</div>