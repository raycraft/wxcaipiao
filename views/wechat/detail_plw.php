<div style="background:#d93f3f;height:44px;position:relative;text-align:center;">
	<div style="font-size:18px;display:inline-block;line-height:44px;color:#fff;font-weight:bold;">
	排列五开奖信息</div>
</div>
<div class="container-fluid">
	 
     <h3>
       <small>第<?php echo $detail['periodicalno']?>期<!-- （） -->：</small><br />
       <span style="color:red;"><?php echo $detail['result'] ?></span>
     </h3>
	 <div class="row">
	 	<table class="table">
	        <thead>
	        	<tr><th>奖项</th><th>中奖注数</th><th>每注奖金</th></tr>
	        </thead>
	        <tbody>
	        	<tr>
	        		<td>一等奖</td><td><?php echo number_format($detail['num1'])?></td><td><?php echo number_format($detail['money1']) ?></td>
	        	</tr>
	        </tbody>
	    </table>
	 </div>
	 <div class="row">
	 	
	 </div>
</div>