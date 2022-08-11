<?php
// $order_query = new WP_Query(array('post_type' => 'shop_order', 'post_status' => 'wc-processing'));
$order_query = new WP_Query(array(
    'post_type' => 'shop_order',
    'posts_per_page' => 20,
    'post_status' => 'wc-completed',
));

while ($order_query->have_posts()): $order_query->the_post();
    $order = wc_get_order(get_the_ID());

    $order_data = $order->get_data(); // The Order data

    $order_id = $order_data['id'];
    // $order_parent_id = $order_data['parent_id'];
    $order_status = $order_data['status'];
    // $order_currency = $order_data['currency'];
    // $order_version = $order_data['version'];
    // $order_payment_method = $order_data['payment_method'];
    $order_payment_method_title = $order_data['payment_method_title'];

## Creation and modified WC_DateTime Object date string ##

// Using a formated date ( with php date() function as method)
    // $order_date_created = $order_data['date_created']->date('Y-m-d H:i:s');
    // $order_date_modified = $order_data['date_modified']->date('Y-m-d H:i:s');

// Using a timestamp ( with php getTimestamp() function as method)
    // $order_timestamp_created = $order_data['date_created']->getTimestamp();
    // $order_timestamp_modified = $order_data['date_modified']->getTimestamp();

    // $order_discount_total = $order_data['discount_total'];
    // $order_discount_tax = $order_data['discount_tax'];
    // $order_shipping_total = $order_data['shipping_total'];
    // $order_shipping_tax = $order_data['shipping_tax'];
    // $order_total = $order_data['cart_tax'];
    // $order_total_tax = $order_data['total_tax'];
    // $order_customer_id = $order_data['customer_id']; // ... and so on

## BILLING INFORMATION:

    // $order_billing_first_name = $order_data['billing']['first_name'];
    // $order_billing_last_name = $order_data['billing']['last_name'];
    // $order_billing_company = $order_data['billing']['company'];
    // $order_billing_address_1 = $order_data['billing']['address_1'];
    // $order_billing_address_2 = $order_data['billing']['address_2'];
    // $order_billing_city = $order_data['billing']['city'];
    // $order_billing_state = $order_data['billing']['state'];
    // $order_billing_postcode = $order_data['billing']['postcode'];
    // $order_billing_country = $order_data['billing']['country'];
    // $order_billing_email = $order_data['billing']['email'];
    // $order_billing_phone = $order_data['billing']['phone'];

## SHIPPING INFORMATION:

    $order_shipping_first_name = $order_data['shipping']['first_name'];
    $order_shipping_last_name = $order_data['shipping']['last_name'];
    $order_shipping_company = $order_data['shipping']['company'];
    $order_shipping_address_1 = $order_data['shipping']['address_1'];
    $order_shipping_address_2 = $order_data['shipping']['address_2'];
    $order_shipping_city = $order_data['shipping']['city'];
    $order_shipping_state = $order_data['shipping']['state'];
    $order_shipping_postcode = $order_data['shipping']['postcode'];
    $order_shipping_country = $order_data['shipping']['country'];

// Echo Shipping address for the delivery
    echo 'Order id: ' . $order_id;
    echo '<br>';
    echo 'Order status: ' . $order_status;
    echo '<br>';
    echo 'Order payment method: ' . $order_payment_method_title;
    echo '<br>';
    echo 'Name: ' . $order_shipping_first_name . ' ' . $order_shipping_last_name;
    echo '<br>';
    echo 'Address 1: ' . $order_shipping_address_1;
    echo '<br>';
    echo 'Address 2: ' . $order_shipping_address_2;
    echo '<br>';
    echo 'Postcode: ' . $order_shipping_postcode;
    echo '<br>';
    echo 'City: ' . $order_shipping_city;
    echo '<br>';
    echo 'State: ' . $order_shipping_state;
    echo '<br>';
    echo 'Country: ' . $order_shipping_country;
    echo '<br>';
    echo '<br>';

endwhile;
