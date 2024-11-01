<?php
// Kiểm tra xem request có phải là POST không

    // Cấu trúc JSON cần response
    $response = [
        "crdate" => "2024-11-01",
        "reqID" => "a7f0494bbf74819436e38bd5140cbbaa",
        "key" => "402106bc810036354e05300a99e459f6",
        "data" => [
            "user" => [
                "days" => 999,
                "email" => "anhbeu@rap.vn",
                "status" => "ultimate",
                "uid" => 9195,
                "user_status" => "ultimate",
                "vid" => "6a0930e3c1309498"
            ],
            "versions" => [
                "app" => 2410041535,
                "installer" => 2410311042,
                "models" => 2409181036,
                "modelsdx" => 2409181036
            ]
        ]
    ];

    // Đặt header cho kiểu dữ liệu JSON
    header('Content-Type: application/json');
    
    // Xuất JSON dưới dạng response
    echo json_encode($response);


?>
