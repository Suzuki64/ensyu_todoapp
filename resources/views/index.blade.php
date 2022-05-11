@extends('layouts.default')
<style>
    table{
      width:100%;
      margin:0 auto;
    }
    th {
      height:50px;
    }
    td {
      height:50px;
      text-align: center;
    }
    td:last-child{
      display:none
    }
    .taskinput{
      width:90%;
      height:27px;
    }
    .updatebutton{
      color:#f4a460;
      border-color:#f4a460;
    }
    .updatebutton:hover{
      background-color:#f4a460;
      transition-duration:0.4s;
    }
    .delbutton{
      color:#7fffd4;
      border-color:#7fffd4;
    }
    .delbutton:hover{
      background-color:#7fffd4;
      transition-duration:0.4s;
    }

</style>

@section('content')
<table>
  <tr>
    <th>作成日</th>
    <th>タスク名</th>
    <th>更新</th>
    <th>削除</th>
  </tr>
  @foreach ($items as $item)
  <form action="?" method="post">
    @csrf
    <tr>
      <td>
        {{$item->created_at}}
      </td>
      <td>
        <input class="taskinput" type="text" name="task" value="{{$item->task}}">
      </td>
      <td>
        <button class="updatebutton" type="submit" formaction="/todo/update">更新</button>
      </td>
      <td>
        <button class="delbutton" type="submit" formaction="/todo/delete">削除</button>
      </td>
      <td>
        <input type="hidden" name="id" value="{{$item->id}}">
      </td>
    </tr>
  </form>
  @endforeach
</table>
@endsection