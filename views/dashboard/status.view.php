<template id="statusRowTemplate">
  <tr class="border-b border-orange-700 hover:bg-black/30">
    <td class="py-3 px-2">{{payment_status}}</td>
    <td class="py-3 px-2">{{sender_name}}</td>
    <td class="py-3 px-2">{{recipient_name}}</td>
    <td class="py-3 px-2">{{courier_name}}</td>
    <td class="py-3 px-2">{{weight}} kg</td>
    <td class="py-3 px-2">{{price}} zł</td>
    <td class="py-3 px-2">{{send_date}}</td>
    <td class="py-3 px-2">{{arrival_date}}</td>
    <td class="py-3 px-2">{{location}}</td>
  </tr>
</template>

<div class="flex justify-between w-full">
  <div id="status" class="flex-[1]">
    <div>
      <table class="w-full whitespace-nowrap">
        <thead class="bg-black/60">
          <th class="text-left py-3 px-2">Payment Status</th>
          <th class="text-left py-3 px-2">Sender Name</th>
          <th class="text-left py-3 px-2">Recipient Name</th>
          <th class="text-left py-3 px-2">Courier Name</th>
          <th class="text-left py-3 px-2">Weight</th>
          <th class="text-left py-3 px-2">Price</th>
          <th class="text-left py-3 px-2">Send Date</th>
          <th class="text-left py-3 px-2">Arrival Date</th>
          <th class="text-left py-3 px-2">Location</th>
        </thead>
        <tbody id="statusTable">
        </tbody>
      </table>
    </div>
  </div>
</div>
<script src="<?php echo BasePath ?>/scripts/status.js"></script>
