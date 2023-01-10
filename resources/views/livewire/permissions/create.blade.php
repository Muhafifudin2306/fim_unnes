<div>
    <button type="button" class="btn ms-2 btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
        Tambah Permission
    </button>

    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="modalCenterTitle">Tambah Permission</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <form>
                            <div class="col mb-3">
                                <label for="nameWithTitle" class="form-label">Name</label>
                                <input type="text" wire:model="name" id="nameWithTitle" class="form-control"
                                    placeholder="Enter Name" />
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="button" wire:click.prevent="store" class="btn btn-primary">Save</button>
                </div>

            </div>
        </div>
    </div>

</div>