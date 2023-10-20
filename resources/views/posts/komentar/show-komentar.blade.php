<div class="my-3">
   <ul>
    @foreach($comment as $item)
        <li>
            <small class="text-danger">{{ $item->created_at }}</small>  {{($item->komentar)}}
        </li>
     @endforeach
  </ul>
</div>

