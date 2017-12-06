<?php 

return [
    1 => [
        "id" => 1,
        "name" => "OrderState",
        "states" => [
            [
                "name" => "initialized",
                "label" => "Initialized",
                "color" => "#4d4a4c"
            ],
            [
                "name" => "new",
                "label" => "New",
                "color" => "#9bc4c4"
            ],
            [
                "name" => "pending_payment",
                "label" => "Pending Payment",
                "color" => "#d0c31f"
            ],
            [
                "name" => "processing",
                "label" => "Processing",
                "color" => "#3081ba"
            ],
            [
                "name" => "complete",
                "label" => "Complete",
                "color" => "#73a623"
            ],
            [
                "name" => "closed",
                "label" => "Closed",
                "color" => "#ffc301"
            ],
            [
                "name" => "canceled",
                "label" => "Canceled",
                "color" => "#c12f30"
            ],
            [
                "name" => "holded",
                "label" => "On Hold",
                "color" => "#b9c1bd"
            ],
            [
                "name" => "payment_review",
                "label" => "Payment Review",
                "color" => "#ae61db"
            ]
        ],
        "statuses" => [
            [
                "name" => "initialized",
                "label" => "Initialized",
                "elementPublished" => TRUE
            ],
            [
                "name" => "pending",
                "label" => "Pending",
                "elementPublished" => TRUE
            ],
            [
                "name" => "pending_payment",
                "label" => "Pending Payment",
                "elementPublished" => TRUE
            ],
            [
                "name" => "processing",
                "label" => "Processing",
                "elementPublished" => TRUE
            ],
            [
                "name" => "complete",
                "label" => "Complete",
                "elementPublished" => TRUE
            ],
            [
                "name" => "closed",
                "label" => "Closed",
                "elementPublished" => TRUE
            ],
            [
                "name" => "canceled",
                "label" => "Canceled",
                "elementPublished" => TRUE
            ],
            [
                "name" => "on_hold",
                "label" => "On Hold",
                "elementPublished" => TRUE
            ],
            [
                "name" => "payment_review",
                "label" => "Payment Review",
                "elementPublished" => TRUE
            ]
        ],
        "actions" => [
            [
                "name" => "change_order_state",
                "label" => "Change Order State",
                "transitionTo" => [
                    "initialized" => [
                        "initialized"
                    ],
                    "new" => [
                        "pending"
                    ],
                    "pending_payment" => [
                        "pending_payment"
                    ],
                    "processing" => [
                        "processing"
                    ],
                    "complete" => [
                        "complete"
                    ],
                    "closed" => [
                        "closed"
                    ],
                    "canceled" => [
                        "canceled"
                    ],
                    "holded" => [
                        "on_hold"
                    ],
                    "payment_review" => [
                        "payment_review"
                    ]
                ],
                "events" => [
                    "before" => [
                        "CoreShop\\Bundle\\OrderBundle\\Workflow\\WorkflowHelper",
                        "beforeDispatchOrderChange"
                    ],
                    "success" => [
                        "CoreShop\\Bundle\\OrderBundle\\Workflow\\WorkflowHelper",
                        "successDispatchOrderChange"
                    ],
                    "failure" => [
                        "CoreShop\\Bundle\\OrderBundle\\Workflow\\WorkflowHelper",
                        "failureDispatchOrderChange"
                    ]
                ],
                "notes" => [
                    "type" => "Order State Change",
                    "required" => FALSE
                ]
            ]
        ],
        "transitionDefinitions" => [
            "initialized" => [
                "validActions" => [
                    "change_order_state" => NULL
                ]
            ],
            "pending_payment" => [
                "validActions" => [
                    "change_order_state" => NULL
                ]
            ],
            "processing" => [
                "validActions" => [
                    "change_order_state" => NULL
                ]
            ],
            "complete" => [
                "validActions" => [
                    "change_order_state" => NULL
                ]
            ],
            "closed" => [
                "validActions" => [
                    "change_order_state" => NULL
                ]
            ],
            "canceled" => [
                "validActions" => [
                    "change_order_state" => NULL
                ]
            ],
            "on_hold" => [
                "validActions" => [
                    "change_order_state" => NULL
                ]
            ],
            "payment_review" => [
                "validActions" => [
                    "change_order_state" => NULL
                ]
            ]
        ],
        "defaultState" => "initialized",
        "defaultStatus" => "initialized",
        "allowUnpublished" => TRUE,
        "workflowSubject" => [
            "types" => [
                "object"
            ],
            "classes" => [
                19
            ]
        ],
        "enabled" => NULL,
        "creationDate" => 1508398849,
        "modificationDate" => 1508398849
    ]
];
