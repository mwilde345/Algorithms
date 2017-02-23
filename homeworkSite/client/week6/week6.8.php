<div class="panel panel-info">
  <h3 class="panel-heading">8. Give a list of the number of permutations of n things for n=1 to n=100 (you will need BigIntegers).  Is it feasible to run through all the permutations of 100 things to solve a problem? Give reasons.</h3>
  <div class="panel-body">
    <pre><code>
      public void fermatRatio(){
        modularexp me = new modularexp();
        for(int i = 5; i&lt1000; i++){
          double passFermat = 0;
          for(int g = 1; g&lti; g++){
            if(me.modexp(g, i-1, i)==1){
              ++passFermat;
            }
          }
          if(passFermat/(i-1)==1){
            System.out.println(i);
          }
          if(passFermat/(i-1)<=(1.0/2.0)){
            System.out.println("Composite: "+i);
          }
          if((passFermat/(i-1)>(1.0/2.0))&&passFermat/(i-1)&lt1.0){
            System.out.println("SPECIAL CASE: "+i);
          }

        }

      }
    </pre></code>
    <pre><code>
      SPECIAL CASE: 561
    </pre></code>
    <pre><code>
      5
      Composite: 6
      7
      Composite: 8
      Composite: 9
      Composite: 10
      11
      Composite: 12
      13
      Composite: 14
      Composite: 15
      Composite: 16
      17
      Composite: 18
      19
      Composite: 20
      Composite: 21
      Composite: 22
      23
      Composite: 24
      Composite: 25
      Composite: 26
      Composite: 27
      Composite: 28
      29
      Composite: 30
      31
      Composite: 32
      Composite: 33
      Composite: 34
      Composite: 35
      Composite: 36
      37
      Composite: 38
      Composite: 39
      Composite: 40
      41
      Composite: 42
      43
      Composite: 44
      Composite: 45
      Composite: 46
      47
      Composite: 48
      Composite: 49
      Composite: 50
      Composite: 51
      Composite: 52
      53
      Composite: 54
      Composite: 55
      Composite: 56
      Composite: 57
      Composite: 58
      59
      Composite: 60
      61
      Composite: 62
      Composite: 63
      Composite: 64
      Composite: 65
      Composite: 66
      67
      Composite: 68
      Composite: 69
      Composite: 70
      71
      Composite: 72
      73
      Composite: 74
      Composite: 75
      Composite: 76
      Composite: 77
      Composite: 78
      79
      Composite: 80
      Composite: 81
      Composite: 82
      83
      Composite: 84
      Composite: 85
      Composite: 86
      Composite: 87
      Composite: 88
      89
      Composite: 90
      Composite: 91
      Composite: 92
      Composite: 93
      Composite: 94
      Composite: 95
      Composite: 96
      97
      Composite: 98
      Composite: 99
      Composite: 100
      101
      Composite: 102
      103
      Composite: 104
      Composite: 105
      Composite: 106
      107
      Composite: 108
      109
      Composite: 110
      Composite: 111
      Composite: 112
      113
      Composite: 114
      Composite: 115
      Composite: 116
      Composite: 117
      Composite: 118
      Composite: 119
      Composite: 120
      Composite: 121
      Composite: 122
      Composite: 123
      Composite: 124
      Composite: 125
      Composite: 126
      127
      Composite: 128
      Composite: 129
      Composite: 130
      131
      Composite: 132
      Composite: 133
      Composite: 134
      Composite: 135
      Composite: 136
      137
      Composite: 138
      139
      Composite: 140
      Composite: 141
      Composite: 142
      Composite: 143
      Composite: 144
      Composite: 145
      Composite: 146
      Composite: 147
      Composite: 148
      149
      Composite: 150
      151
      Composite: 152
      Composite: 153
      Composite: 154
      Composite: 155
      Composite: 156
      157
      Composite: 158
      Composite: 159
      Composite: 160
      Composite: 161
      Composite: 162
      163
      Composite: 164
      Composite: 165
      Composite: 166
      167
      Composite: 168
      Composite: 169
      Composite: 170
      Composite: 171
      Composite: 172
      173
      Composite: 174
      Composite: 175
      Composite: 176
      Composite: 177
      Composite: 178
      179
      Composite: 180
      181
      Composite: 182
      Composite: 183
      Composite: 184
      Composite: 185
      Composite: 186
      Composite: 187
      Composite: 188
      Composite: 189
      Composite: 190
      191
      Composite: 192
      193
      Composite: 194
      Composite: 195
      Composite: 196
      197
      Composite: 198
      199
      Composite: 200
      Composite: 201
      Composite: 202
      Composite: 203
      Composite: 204
      Composite: 205
      Composite: 206
      Composite: 207
      Composite: 208
      Composite: 209
      Composite: 210
      211
      Composite: 212
      Composite: 213
      Composite: 214
      Composite: 215
      Composite: 216
      Composite: 217
      Composite: 218
      Composite: 219
      Composite: 220
      Composite: 221
      Composite: 222
      223
      Composite: 224
      Composite: 225
      Composite: 226
      227
      Composite: 228
      229
      Composite: 230
      Composite: 231
      Composite: 232
      233
      Composite: 234
      Composite: 235
      Composite: 236
      Composite: 237
      Composite: 238
      239
      Composite: 240
      241
      Composite: 242
      Composite: 243
      Composite: 244
      Composite: 245
      Composite: 246
      Composite: 247
      Composite: 248
      Composite: 249
      Composite: 250
      251
      Composite: 252
      Composite: 253
      Composite: 254
      Composite: 255
      Composite: 256
      257
      Composite: 258
      Composite: 259
      Composite: 260
      Composite: 261
      Composite: 262
      263
      Composite: 264
      Composite: 265
      Composite: 266
      Composite: 267
      Composite: 268
      269
      Composite: 270
      271
      Composite: 272
      Composite: 273
      Composite: 274
      Composite: 275
      Composite: 276
      277
      Composite: 278
      Composite: 279
      Composite: 280
      281
      Composite: 282
      283
      Composite: 284
      Composite: 285
      Composite: 286
      Composite: 287
      Composite: 288
      Composite: 289
      Composite: 290
      Composite: 291
      Composite: 292
      293
      Composite: 294
      Composite: 295
      Composite: 296
      Composite: 297
      Composite: 298
      Composite: 299
      Composite: 300
      Composite: 301
      Composite: 302
      Composite: 303
      Composite: 304
      Composite: 305
      Composite: 306
      307
      Composite: 308
      Composite: 309
      Composite: 310
      311
      Composite: 312
      313
      Composite: 314
      Composite: 315
      Composite: 316
      317
      Composite: 318
      Composite: 319
      Composite: 320
      Composite: 321
      Composite: 322
      Composite: 323
      Composite: 324
      Composite: 325
      Composite: 326
      Composite: 327
      Composite: 328
      Composite: 329
      Composite: 330
      331
      Composite: 332
      Composite: 333
      Composite: 334
      Composite: 335
      Composite: 336
      337
      Composite: 338
      Composite: 339
      Composite: 340
      Composite: 341
      Composite: 342
      Composite: 343
      Composite: 344
      Composite: 345
      Composite: 346
      347
      Composite: 348
      349
      Composite: 350
      Composite: 351
      Composite: 352
      353
      Composite: 354
      Composite: 355
      Composite: 356
      Composite: 357
      Composite: 358
      359
      Composite: 360
      Composite: 361
      Composite: 362
      Composite: 363
      Composite: 364
      Composite: 365
      Composite: 366
      367
      Composite: 368
      Composite: 369
      Composite: 370
      Composite: 371
      Composite: 372
      373
      Composite: 374
      Composite: 375
      Composite: 376
      Composite: 377
      Composite: 378
      379
      Composite: 380
      Composite: 381
      Composite: 382
      383
      Composite: 384
      Composite: 385
      Composite: 386
      Composite: 387
      Composite: 388
      389
      Composite: 390
      Composite: 391
      Composite: 392
      Composite: 393
      Composite: 394
      Composite: 395
      Composite: 396
      397
      Composite: 398
      Composite: 399
      Composite: 400
      401
      Composite: 402
      Composite: 403
      Composite: 404
      Composite: 405
      Composite: 406
      Composite: 407
      Composite: 408
      409
      Composite: 410
      Composite: 411
      Composite: 412
      Composite: 413
      Composite: 414
      Composite: 415
      Composite: 416
      Composite: 417
      Composite: 418
      419
      Composite: 420
      421
      Composite: 422
      Composite: 423
      Composite: 424
      Composite: 425
      Composite: 426
      Composite: 427
      Composite: 428
      Composite: 429
      Composite: 430
      431
      Composite: 432
      433
      Composite: 434
      Composite: 435
      Composite: 436
      Composite: 437
      Composite: 438
      439
      Composite: 440
      Composite: 441
      Composite: 442
      443
      Composite: 444
      Composite: 445
      Composite: 446
      Composite: 447
      Composite: 448
      449
      Composite: 450
      Composite: 451
      Composite: 452
      Composite: 453
      Composite: 454
      Composite: 455
      Composite: 456
      457
      Composite: 458
      Composite: 459
      Composite: 460
      461
      Composite: 462
      463
      Composite: 464
      Composite: 465
      Composite: 466
      467
      Composite: 468
      Composite: 469
      Composite: 470
      Composite: 471
      Composite: 472
      Composite: 473
      Composite: 474
      Composite: 475
      Composite: 476
      Composite: 477
      Composite: 478
      479
      Composite: 480
      Composite: 481
      Composite: 482
      Composite: 483
      Composite: 484
      Composite: 485
      Composite: 486
      487
      Composite: 488
      Composite: 489
      Composite: 490
      491
      Composite: 492
      Composite: 493
      Composite: 494
      Composite: 495
      Composite: 496
      Composite: 497
      Composite: 498
      499
      Composite: 500
      Composite: 501
      Composite: 502
      503
      Composite: 504
      Composite: 505
      Composite: 506
      Composite: 507
      Composite: 508
      509
      Composite: 510
      Composite: 511
      Composite: 512
      Composite: 513
      Composite: 514
      Composite: 515
      Composite: 516
      Composite: 517
      Composite: 518
      Composite: 519
      Composite: 520
      521
      Composite: 522
      523
      Composite: 524
      Composite: 525
      Composite: 526
      Composite: 527
      Composite: 528
      Composite: 529
      Composite: 530
      Composite: 531
      Composite: 532
      Composite: 533
      Composite: 534
      Composite: 535
      Composite: 536
      Composite: 537
      Composite: 538
      Composite: 539
      Composite: 540
      541
      Composite: 542
      Composite: 543
      Composite: 544
      Composite: 545
      Composite: 546
      547
      Composite: 548
      Composite: 549
      Composite: 550
      Composite: 551
      Composite: 552
      Composite: 553
      Composite: 554
      Composite: 555
      Composite: 556
      557
      Composite: 558
      Composite: 559
      Composite: 560
      SPECIAL CASE: 561
      Composite: 562
      563
      Composite: 564
      Composite: 565
      Composite: 566
      Composite: 567
      Composite: 568
      569
      Composite: 570
      571
      Composite: 572
      Composite: 573
      Composite: 574
      Composite: 575
      Composite: 576
      577
      Composite: 578
      Composite: 579
      Composite: 580
      Composite: 581
      Composite: 582
      Composite: 583
      Composite: 584
      Composite: 585
      Composite: 586
      587
      Composite: 588
      Composite: 589
      Composite: 590
      Composite: 591
      Composite: 592
      593
      Composite: 594
      Composite: 595
      Composite: 596
      Composite: 597
      Composite: 598
      599
      Composite: 600
      601
      Composite: 602
      Composite: 603
      Composite: 604
      Composite: 605
      Composite: 606
      607
      Composite: 608
      Composite: 609
      Composite: 610
      Composite: 611
      Composite: 612
      613
      Composite: 614
      Composite: 615
      Composite: 616
      617
      Composite: 618
      619
      Composite: 620
      Composite: 621
      Composite: 622
      Composite: 623
      Composite: 624
      Composite: 625
      Composite: 626
      Composite: 627
      Composite: 628
      Composite: 629
      Composite: 630
      631
      Composite: 632
      Composite: 633
      Composite: 634
      Composite: 635
      Composite: 636
      Composite: 637
      Composite: 638
      Composite: 639
      Composite: 640
      641
      Composite: 642
      643
      Composite: 644
      Composite: 645
      Composite: 646
      647
      Composite: 648
      Composite: 649
      Composite: 650
      Composite: 651
      Composite: 652
      653
      Composite: 654
      Composite: 655
      Composite: 656
      Composite: 657
      Composite: 658
      659
      Composite: 660
      661
      Composite: 662
      Composite: 663
      Composite: 664
      Composite: 665
      Composite: 666
      Composite: 667
      Composite: 668
      Composite: 669
      Composite: 670
      Composite: 671
      Composite: 672
      673
      Composite: 674
      Composite: 675
      Composite: 676
      677
      Composite: 678
      Composite: 679
      Composite: 680
      Composite: 681
      Composite: 682
      683
      Composite: 684
      Composite: 685
      Composite: 686
      Composite: 687
      Composite: 688
      Composite: 689
      Composite: 690
      691
      Composite: 692
      Composite: 693
      Composite: 694
      Composite: 695
      Composite: 696
      Composite: 697
      Composite: 698
      Composite: 699
      Composite: 700
      701
      Composite: 702
      Composite: 703
      Composite: 704
      Composite: 705
      Composite: 706
      Composite: 707
      Composite: 708
      709
      Composite: 710
      Composite: 711
      Composite: 712
      Composite: 713
      Composite: 714
      Composite: 715
      Composite: 716
      Composite: 717
      Composite: 718
      719
      Composite: 720
      Composite: 721
      Composite: 722
      Composite: 723
      Composite: 724
      Composite: 725
      Composite: 726
      727
      Composite: 728
      Composite: 729
      Composite: 730
      Composite: 731
      Composite: 732
      733
      Composite: 734
      Composite: 735
      Composite: 736
      Composite: 737
      Composite: 738
      739
      Composite: 740
      Composite: 741
      Composite: 742
      743
      Composite: 744
      Composite: 745
      Composite: 746
      Composite: 747
      Composite: 748
      Composite: 749
      Composite: 750
      751
      Composite: 752
      Composite: 753
      Composite: 754
      Composite: 755
      Composite: 756
      757
      Composite: 758
      Composite: 759
      Composite: 760
      761
      Composite: 762
      Composite: 763
      Composite: 764
      Composite: 765
      Composite: 766
      Composite: 767
      Composite: 768
      769
      Composite: 770
      Composite: 771
      Composite: 772
      773
      Composite: 774
      Composite: 775
      Composite: 776
      Composite: 777
      Composite: 778
      Composite: 779
      Composite: 780
      Composite: 781
      Composite: 782
      Composite: 783
      Composite: 784
      Composite: 785
      Composite: 786
      787
      Composite: 788
      Composite: 789
      Composite: 790
      Composite: 791
      Composite: 792
      Composite: 793
      Composite: 794
      Composite: 795
      Composite: 796
      797
      Composite: 798
      Composite: 799
      Composite: 800
      Composite: 801
      Composite: 802
      Composite: 803
      Composite: 804
      Composite: 805
      Composite: 806
      Composite: 807
      Composite: 808
      809
      Composite: 810
      811
      Composite: 812
      Composite: 813
      Composite: 814
      Composite: 815
      Composite: 816
      Composite: 817
      Composite: 818
      Composite: 819
      Composite: 820
      821
      Composite: 822
      823
      Composite: 824
      Composite: 825
      Composite: 826
      827
      Composite: 828
      829
      Composite: 830
      Composite: 831
      Composite: 832
      Composite: 833
      Composite: 834
      Composite: 835
      Composite: 836
      Composite: 837
      Composite: 838
      839
      Composite: 840
      Composite: 841
      Composite: 842
      Composite: 843
      Composite: 844
      Composite: 845
      Composite: 846
      Composite: 847
      Composite: 848
      Composite: 849
      Composite: 850
      Composite: 851
      Composite: 852
      853
      Composite: 854
      Composite: 855
      Composite: 856
      857
      Composite: 858
      859
      Composite: 860
      Composite: 861
      Composite: 862
      863
      Composite: 864
      Composite: 865
      Composite: 866
      Composite: 867
      Composite: 868
      Composite: 869
      Composite: 870
      Composite: 871
      Composite: 872
      Composite: 873
      Composite: 874
      Composite: 875
      Composite: 876
      877
      Composite: 878
      Composite: 879
      Composite: 880
      881
      Composite: 882
      883
      Composite: 884
      Composite: 885
      Composite: 886
      887
      Composite: 888
      Composite: 889
      Composite: 890
      Composite: 891
      Composite: 892
      Composite: 893
      Composite: 894
      Composite: 895
      Composite: 896
      Composite: 897
      Composite: 898
      Composite: 899
      Composite: 900
      Composite: 901
      Composite: 902
      Composite: 903
      Composite: 904
      Composite: 905
      Composite: 906
      907
      Composite: 908
      Composite: 909
      Composite: 910
      911
      Composite: 912
      Composite: 913
      Composite: 914
      Composite: 915
      Composite: 916
      Composite: 917
      Composite: 918
      919
      Composite: 920
      Composite: 921
      Composite: 922
      Composite: 923
      Composite: 924
      Composite: 925
      Composite: 926
      Composite: 927
      Composite: 928
      929
      Composite: 930
      Composite: 931
      Composite: 932
      Composite: 933
      Composite: 934
      Composite: 935
      Composite: 936
      937
      Composite: 938
      Composite: 939
      Composite: 940
      941
      Composite: 942
      Composite: 943
      Composite: 944
      Composite: 945
      Composite: 946
      947
      Composite: 948
      Composite: 949
      Composite: 950
      Composite: 951
      Composite: 952
      953
      Composite: 954
      Composite: 955
      Composite: 956
      Composite: 957
      Composite: 958
      Composite: 959
      Composite: 960
      Composite: 961
      Composite: 962
      Composite: 963
      Composite: 964
      Composite: 965
      Composite: 966
      967
      Composite: 968
      Composite: 969
      Composite: 970
      971
      Composite: 972
      Composite: 973
      Composite: 974
      Composite: 975
      Composite: 976
      977
      Composite: 978
      Composite: 979
      Composite: 980
      Composite: 981
      Composite: 982
      983
      Composite: 984
      Composite: 985
      Composite: 986
      Composite: 987
      Composite: 988
      Composite: 989
      Composite: 990
      991
      Composite: 992
      Composite: 993
      Composite: 994
      Composite: 995
      Composite: 996
      997
      Composite: 998
      Composite: 999

    </pre></code>
  </div>
</div>
