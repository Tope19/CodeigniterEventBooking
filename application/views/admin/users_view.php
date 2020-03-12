
<ul id="people-list" class="client-list">
    <?php foreach($list as $item){?>
    <li> <span class="user-status online red-skin"></span>
        <div class="client-info">
            <?php echo $item->firstname.' '.$item->lastname; ?>
        </div>
    </li>
    <?php } ?>
</ul>
