<?php
// $url = 'http://api-meeyads.meeycdn.com/api/sys-function/get-list-function-by-user-id?userId=70';
$url = "http://nghiahsgs.com";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false);
$array_menu = curl_exec($ch);
// print_r($array_menu);
curl_close($ch);




$array_menu = '{"statusCode":200,"success":true,"data":[{"function_id":1,"function_name":"Trang chủ","function_code":"dashboard","view_path":"/home","app_name":null,"parent_code":null,"icon":"menu-item-icon icon ion-ios-home-outline tx-24","is_active":null,"user_id":null,"childrens":[]},{"function_id":2,"function_name":"Google Ads","function_code":"google_ads","view_path":"","app_name":null,"parent_code":null,"icon":"fab fa-google tx-16","is_active":null,"user_id":null,"childrens":[{"function_id":3,"function_name":"Tạo yêu cầu quảng cáo","function_code":"create_request_ga","view_path":"/request-ad","app_name":null,"parent_code":"google_ads","icon":null,"is_active":null,"user_id":null,"childrens":[]},{"function_id":4,"function_name":"Khởi tạo quảng cáo","function_code":"create_ga","view_path":"/user/ads_generator","app_name":null,"parent_code":"google_ads","icon":null,"is_active":null,"user_id":null,"childrens":[]},{"function_id":5,"function_name":"Quản lý quảng cáo","function_code":"manager_ga","view_path":"/user/ads-report","app_name":null,"parent_code":"google_ads","icon":null,"is_active":null,"user_id":null,"childrens":[]},{"function_id":6,"function_name":"Quản lý yêu cầu tạo quảng cáo","function_code":"manager_request_ga","view_path":"/user/ad-creation-requests-management","app_name":null,"parent_code":"google_ads","icon":null,"is_active":null,"user_id":null,"childrens":[]},{"function_id":7,"function_name":"Nhận yêu cầu chạy quảng cáo","function_code":"received_request_ga","view_path":"/user/ad-received-the-request","app_name":null,"parent_code":"google_ads","icon":null,"is_active":null,"user_id":null,"childrens":[]},{"function_id":30,"function_name":"Google Editer","function_code":"google_editer","view_path":"/user/meeyads-editor","app_name":null,"parent_code":"google_ads","icon":null,"is_active":null,"user_id":null,"childrens":[]}]},{"function_id":8,"function_name":"Facebook Ads","function_code":"facebook_ads","view_path":"","app_name":null,"parent_code":"","icon":"fab fa-facebook-f tx-16","is_active":null,"user_id":null,"childrens":[{"function_id":15,"function_name":"Tạo yêu cầu quảng cáo","function_code":"create_request_fa","view_path":"/facebook_ads/request-ad","app_name":null,"parent_code":"facebook_ads","icon":"","is_active":null,"user_id":null,"childrens":[]},{"function_id":16,"function_name":"Khởi tạo quảng cáo","function_code":"create_fa","view_path":"/facebook_ads/ads_generator","app_name":null,"parent_code":"facebook_ads","icon":"","is_active":null,"user_id":null,"childrens":[]},{"function_id":17,"function_name":"Quản lý quảng cáo","function_code":"manager_fa","view_path":"/facebook_ads/ads_manager","app_name":null,"parent_code":"facebook_ads","icon":"","is_active":null,"user_id":null,"childrens":[]},{"function_id":18,"function_name":"Quản lý đối tượng","function_code":"manager_audience_fa","view_path":"/facebook_ads/ads_object_management","app_name":null,"parent_code":"facebook_ads","icon":"","is_active":null,"user_id":null,"childrens":[]},{"function_id":19,"function_name":"Quản lý yêu cầu tạo quảng cáo","function_code":"manager_request_fa","view_path":"/facebook_ads/ad-creation-requests-management","app_name":null,"parent_code":"facebook_ads","icon":"","is_active":null,"user_id":null,"childrens":[]},{"function_id":20,"function_name":"Nhận yêu cầu chạy quảng cáo","function_code":"received_request_fa","view_path":"/facebook_ads/ad-received-the-request","app_name":null,"parent_code":"facebook_ads","icon":"","is_active":null,"user_id":null,"childrens":[]}]},{"function_id":21,"function_name":"Meeyland Ads","function_code":"meey_ads","view_path":"","app_name":null,"parent_code":"","icon":"fab fa-google-wallet tx-16","is_active":null,"user_id":null,"childrens":[]},{"function_id":22,"function_name":"Dữ liệu","function_code":"data","view_path":"","app_name":null,"parent_code":"","icon":"menu-item-icon icon ion-ios-color-filter-outline tx-24","is_active":null,"user_id":null,"childrens":[{"function_id":23,"function_name":"Website bất động sản","function_code":"web_real_estate","view_path":"/user/property-domain","app_name":null,"parent_code":"data","icon":"","is_active":null,"user_id":null,"childrens":[]},{"function_id":24,"function_name":"Dự án bất động sản","function_code":"project_real_estate","view_path":"/user/property","app_name":null,"parent_code":"data","icon":"","is_active":null,"user_id":null,"childrens":[]},{"function_id":25,"function_name":"Nghiên cứu quảng cáo","function_code":"research_ads","view_path":"/user/ads-explorer","app_name":null,"parent_code":"data","icon":"","is_active":null,"user_id":null,"childrens":[]}]},{"function_id":26,"function_name":"Thống kê báo cáo","function_code":"report","view_path":"","app_name":null,"parent_code":"","icon":"menu-item-icon ion-ios-pie-outline tx-20","is_active":null,"user_id":null,"childrens":[]},{"function_id":27,"function_name":"Ví","function_code":"wallet","view_path":"","app_name":null,"parent_code":"","icon":"menu-item-icon icon ion-ios-filing-outline tx-24","is_active":null,"user_id":null,"childrens":[{"function_id":28,"function_name":"Ví marketer","function_code":"wallet_personal","view_path":"/wallet","app_name":null,"parent_code":"wallet","icon":"","is_active":null,"user_id":null,"childrens":[]},{"function_id":29,"function_name":"Ví meeyads","function_code":"transaction","view_path":"/transaction","app_name":null,"parent_code":"wallet","icon":"","is_active":null,"user_id":null,"childrens":[]}]}],"error":null,"errorMessage":null}';
$array_menu = json_decode($array_menu);
$array_menu = $array_menu->data;


$current_url = '/user/ad-received-the-requestzz';
$current_url = '/user';
print_r($array_menu);

$is_allow = false;
foreach($array_menu as $block_menu){
    if($current_url==$block_menu->view_path){$is_allow = true;};
    foreach($block_menu->childrens as $child){
        if($current_url==$child->view_path){$is_allow = true;};
    }

}
echo $is_allow;
?>