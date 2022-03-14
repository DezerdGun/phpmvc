<table class="table table-bordered ">
    <h1>Витрина Магазин товаров</h1>
   
    <tr>
        <td>№</td>
        <td>Title</td>
        <td>Price</td>
        <td>Img</td>
        <td>User_id</td>
        <td>Ссылка товар</td>
    </tr>
    <? foreach( $magazin_user as $item){?>
    <tr>
        <td><?=$item['id']?></td>
        <td><?=$item['title']?></td>
        <td><?=$item['price']?></td>
        <td><?=$item['img']?></td>
        <td><?=$item['user_id']?></td>
        <td><a href="">Просмотр товар</a></td>
    </tr>
    <?}?>
</table>


<style>
    .table{
        width:700px;
    }
</style>