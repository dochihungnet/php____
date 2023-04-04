
<div class="modal-content" >
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">sua san pham</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form action="{{route('edit',$item->id)}}" method="POST">
        @csrf
        <div class="form-group">
          <label for="recipient-name" class="col-form-label">Ten san pham</label>
          <input type="text" class="form-control" id="recipient-name" name="name">
        </div>
        <div class="form-group">
            <label for="recipient-name" class="col-form-label">anh</label>
            <input type="text" class="form-control" id="recipient-name" name="image">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">gia</label>
            <input type="text" class="form-control" id="recipient-name" name="price">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">chi tiet</label>
            <input type="text" class="form-control" id="recipient-name" name="detail">
          </div>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Huy</button>
          <button type="submit" class="btn btn-primary">Xac nhan</button>
      </form>
    </div>

