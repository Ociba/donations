<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="modal fade" id="modal-report" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Target Group Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form  wire:submit.prevent="saveTargetGroup">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="floating-label" for="heading">Title</label>
                                    <input type="text" class="form-control" wire:model="heading"  id="Heading" data-toggle="tooltip" data-placement="bottom" title="Enter Your title" placeholder="" >
                                    @error('heading') <span style="color:red;">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group fill">
                                    <label class="floating-label" for="number">Email</label>
                                    <input type="text" class="form-control" wire:model="number" id="Number" data-toggle="tooltip" data-placement="bottom" title="Enter Number" placeholder="1" >
                                    @error('number') <span style="color:red;">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group fill">
                                    <label class="floating-label" for="body">Body</label>
                                    <textarea type="text" class="form-control" wire:model="body" id="Body" data-toggle="tooltip" data-placement="bottom" title="Body Content"></textarea>
                                    @error('body') <span style="color:red;">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group fill">
                                    <label class="floating-label" for="photo">Photo</label>
                                    <input type="file" class="form-control" wire:model="photo" id="Photo" data-toggle="tooltip" data-placement="bottom" title="Image">
                                    @error('photo') <span style="color:red;">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
</div>
