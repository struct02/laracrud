<x-layout>
Add to database


<form method="POST">
@csrf
<div class="w-50 mx-auto mt-5">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Product Name</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" name="prodname" placeholder="">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Product Quantity</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" name="prodq" placeholder="">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Product Description</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="proddesc"></textarea>

    <button type="submit" class="btn btn-primary mb-3 mt-3">Submit</button>
</div>

</form>


</div>

{{-- <x-topfooter></x-topfooter> --}}
</x-layout>