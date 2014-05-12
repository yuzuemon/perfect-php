// 中括弧を用いる場合
<?php if ($display_message) { ?>
<p>
  このメッセージは $display_message が true の時に表示されます。
</p>
<?php } else  { ?>
<p>
  このメッセージは $display_message が false の時に表示されます。
</p>
<?php } ?>


// コロンを用いる場合
<?php if ($display_message): ?>
<p>
  このメッセージは $display_message が true の時に表示されます。
</p>
<?php else: ?>
<p>
  このメッセージは $display_message が false の時に表示されます。
</p>
<?php endif; ?>
