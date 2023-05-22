<?php include('./header.php'); ?>

<div class="flex md:pb-[84px]">
    <?php include('./sidebar.php'); ?>
    <div class="bg-[#EBF4F8] py-[16px] pb-[48px] px-[9px] lg:p-[27px] lg:rounded-[40px] w-full lg:mr-[40px]">

        <h2 class="text-[20px] leading-[24px] text-[#003F6C] font-semibold mb-[28px] ml-[16px] md:ml-0 mt-[1rem]">External payment recipients</h2> 

        <div class="bg-gradient-white2 p-[19px] md:p-[35px] rounded-[20px]">

            <div class="grid grid-cols-12 gap-[15px]">
                <div class="col-span-12 md:col-span-3">
                    <button data-showid="tab1" class="text-[#003F6C] active-tab-btn tab-btn-choose font-semibold text-[14px] leading-[21px] flex items-center justify-center bg-white rounded-[20px] min-w-[190px] py-[10px] m-auto mb-[21px]">Recipient Name 1</button>
                    <button data-showid="tab2" class="text-[#003F6C] tab-btn-choose font-semibold text-[14px] leading-[21px] flex items-center justify-center bg-white rounded-[20px] min-w-[190px] py-[10px] m-auto mb-[21px]">Recipient Name 1</button>
                    <button data-showid="tab3" class="text-[#003F6C] tab-btn-choose font-semibold text-[14px] leading-[21px] flex items-center justify-center bg-white rounded-[20px] min-w-[190px] py-[10px] m-auto mb-[21px]">Recipient Name 1</button>
                    <button data-showid="tab4" class="text-[#003F6C] tab-btn-choose font-semibold text-[14px] leading-[21px] flex items-center justify-center bg-white rounded-[20px] min-w-[190px] py-[10px] m-auto mb-[21px]">Recipient Name 1</button>
                    <button data-showid="tab5" class="text-[#003F6C] tab-btn-choose font-semibold text-[14px] leading-[21px] flex items-center justify-center bg-white rounded-[20px] min-w-[190px] py-[10px] m-auto mb-[21px]">Recipient Name 1</button>
                </div>
                <div class="col-span-12 md:col-span-9">
                    <div id="tab1">
                        <div class="grid grid-cols-12 gap-[15px] mb-[33px]">
                            <div class="col-span-12 md:col-span-6">
                                <div class="rounded-[10px] px-[14px] py-[10px] bg-silver-light inline-block">
                                    <p class="mb-[10px] text-[12px] leading-[18px] text-[#3E3E3E]">Company: <span class="font-semibold">Test Company</span></p>
                                    <p class="mb-[0px] text-[12px] leading-[18px] text-[#3E3E3E]">Reg #: Test</p>
                                </div>
                            </div>
                            <div class="col-span-12 md:col-span-6 md:text-right">
                                <div class="w-full md:w-auto">
                                    <div class="inline-flex justify-between mb-[10px] w-full md:w-auto md:min-w-[220px]">
                                    <p class="text-[12px] leading-[18px] text-[#3E3E3E]">Total Payrol YTD: </p>
                                    <span class="text-[12px] leading-[18px] text-[#3E3E3E]">N$ <span class="font-semibold">0.00</span></span>
                                    </div>
                                </div>
                                <div class="w-full md:w-auto">
                                    <div class="inline-flex justify-between mb-[10px] w-full md:w-auto md:min-w-[220px]">
                                    <p class="text-[12px] leading-[18px] text-[#3E3E3E]">Income Payrol YTD: </p>
                                    <span class="text-[12px] leading-[18px] text-[#3E3E3E]">N$ <span class="font-semibold">0.00</span></span>
                                    </div>
                                </div>
                                <div class="w-full md:w-auto">
                                    <div class="inline-flex justify-between mb-[10px] w-full md:w-auto md:min-w-[220px]">
                                    <p class="text-[12px] leading-[18px] text-[#3E3E3E]">Benefit Contributions YTD: </p>
                                    <span class="text-[12px] leading-[18px] text-[#3E3E3E]">N$ <span class="font-semibold">0.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr class="bg-[#E4E4E4] mt-[20px] mb-[25px]"/>

                        <h3 class="text-[#003F6C] font-semibold text-[20px] leading-[30px] mb-[16px] md:mb-[30px]">New External Payment Recipient</h3>

                        <div class="grid grid-cols-12 gap-[15px] mb-[20px] items-center">
                            <div class="col-span-12 md:col-span-5">
                                <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Recipient Name*</label>
                                <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                            </div>
                            <div class="col-span-12 md:col-span-7 custom-select custom-select-full">
                                <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Country of the Bank*</label>
                                <select id="countries" class="bg-white w-full box-shadow select-custom outline-0 montserrat font-semibold text-[14px] leading-[17px] text-[#3E3E3E] text-sm rounded-[10px] block px-[14px] py-[10px] h-[46px]">
                                <option selected>All customers</option>
                                <option value="US">United States</option>
                                <option value="CA">Canada</option>
                                <option value="FR">France</option>
                                <option value="DE">Germany</option>
                                </select>
                            </div>
                        </div>

                        <div class="grid grid-cols-12 gap-[15px] mb-[20px] items-center">
                            <div class="col-span-12 md:col-span-5">
                                <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Bank Name*</label>
                                <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                            </div>
                            <div class="col-span-12 md:col-span-7">
                                <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Branch Name*</label>
                                <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                            </div>
                        </div>

                        <div class="grid grid-cols-12 gap-[15px] mb-[20px] items-center">
                            <div class="col-span-12 md:col-span-5">
                                <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Branch Code*</label>
                                <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                            </div>
                            <div class="col-span-12 md:col-span-7">
                                <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Account Number*</label>
                                <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                            </div>
                        </div>

                        <div class="grid grid-cols-12 gap-[15px] mb-[35px] items-center">
                            <div class="col-span-12 md:col-span-5">
                                <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Your Payment Reference*</label>
                                <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                            </div>
                            <div class="col-span-12 md:col-span-7">
                                <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Their Payment Reference*</label>
                                <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                            </div>
                        </div>

                        <div class="text-right flex items-end justify-end">
                            <button class="bg-[#003F6C] hover:bg-[#002743] w-full md:w-auto box-shadow text-white rounded-[10px] min-w-[180px] montserrat font-semibold text-[14px] leading-[17px] px-[37px] py-[15px]">Save</button>
                        </div>
                    </div>

                    <div id="tab2" class="hidden">
                        <div class="grid grid-cols-12 gap-[15px] mb-[33px]">
                            <div class="col-span-12 md:col-span-6">
                                <div class="rounded-[10px] px-[14px] py-[10px] bg-silver-light inline-block">
                                    <p class="mb-[10px] text-[12px] leading-[18px] text-[#3E3E3E]">Company: <span class="font-semibold">Test Company</span></p>
                                    <p class="mb-[0px] text-[12px] leading-[18px] text-[#3E3E3E]">Reg #: Test</p>
                                </div>
                            </div>
                            <div class="col-span-12 md:col-span-6 md:text-right">
                                <div class="w-full md:w-auto">
                                    <div class="inline-flex justify-between mb-[10px] w-full md:w-auto md:min-w-[220px]">
                                    <p class="text-[12px] leading-[18px] text-[#3E3E3E]">Total Payrol YTD: </p>
                                    <span class="text-[12px] leading-[18px] text-[#3E3E3E]">N$ <span class="font-semibold">0.00</span></span>
                                    </div>
                                </div>
                                <div class="w-full md:w-auto">
                                    <div class="inline-flex justify-between mb-[10px] w-full md:w-auto md:min-w-[220px]">
                                    <p class="text-[12px] leading-[18px] text-[#3E3E3E]">Income Payrol YTD: </p>
                                    <span class="text-[12px] leading-[18px] text-[#3E3E3E]">N$ <span class="font-semibold">0.00</span></span>
                                    </div>
                                </div>
                                <div class="w-full md:w-auto">
                                    <div class="inline-flex justify-between mb-[10px] w-full md:w-auto md:min-w-[220px]">
                                    <p class="text-[12px] leading-[18px] text-[#3E3E3E]">Benefit Contributions YTD: </p>
                                    <span class="text-[12px] leading-[18px] text-[#3E3E3E]">N$ <span class="font-semibold">0.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr class="bg-[#E4E4E4] mt-[20px] mb-[25px]"/>

                        <h3 class="text-[#003F6C] font-semibold text-[20px] leading-[30px] mb-[16px] md:mb-[30px]">New External Payment Recipient</h3>

                        <div class="grid grid-cols-12 gap-[15px] mb-[20px] items-center">
                            <div class="col-span-12 md:col-span-5">
                                <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Recipient Name*</label>
                                <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                            </div>
                            <div class="col-span-12 md:col-span-7 custom-select custom-select-full">
                                <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Country of the Bank*</label>
                                <select id="countries" class="bg-white w-full box-shadow select-custom outline-0 montserrat font-semibold text-[14px] leading-[17px] text-[#3E3E3E] text-sm rounded-[10px] block px-[14px] py-[10px] h-[46px]">
                                <option selected>All customers</option>
                                <option value="US">United States</option>
                                <option value="CA">Canada</option>
                                <option value="FR">France</option>
                                <option value="DE">Germany</option>
                                </select>
                            </div>
                        </div>

                        <div class="grid grid-cols-12 gap-[15px] mb-[20px] items-center">
                            <div class="col-span-12 md:col-span-5">
                                <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Bank Name*</label>
                                <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                            </div>
                            <div class="col-span-12 md:col-span-7">
                                <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Branch Name*</label>
                                <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                            </div>
                        </div>

                        <div class="grid grid-cols-12 gap-[15px] mb-[20px] items-center">
                            <div class="col-span-12 md:col-span-5">
                                <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Branch Code*</label>
                                <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                            </div>
                            <div class="col-span-12 md:col-span-7">
                                <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Account Number*</label>
                                <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                            </div>
                        </div>

                        <div class="grid grid-cols-12 gap-[15px] mb-[35px] items-center">
                            <div class="col-span-12 md:col-span-5">
                                <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Your Payment Reference*</label>
                                <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                            </div>
                            <div class="col-span-12 md:col-span-7">
                                <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Their Payment Reference*</label>
                                <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                            </div>
                        </div>

                        <div class="text-right flex items-end justify-end">
                            <button class="bg-[#003F6C] hover:bg-[#002743] w-full md:w-auto box-shadow text-white rounded-[10px] min-w-[180px] montserrat font-semibold text-[14px] leading-[17px] px-[37px] py-[15px]">Save</button>
                        </div>
                    </div>

                    <div id="tab3" class="hidden">
                        <div class="grid grid-cols-12 gap-[15px] mb-[33px]">
                            <div class="col-span-12 md:col-span-6">
                                <div class="rounded-[10px] px-[14px] py-[10px] bg-silver-light inline-block">
                                    <p class="mb-[10px] text-[12px] leading-[18px] text-[#3E3E3E]">Company: <span class="font-semibold">Test Company</span></p>
                                    <p class="mb-[0px] text-[12px] leading-[18px] text-[#3E3E3E]">Reg #: Test</p>
                                </div>
                            </div>
                            <div class="col-span-12 md:col-span-6 md:text-right">
                                <div class="w-full md:w-auto">
                                    <div class="inline-flex justify-between mb-[10px] w-full md:w-auto md:min-w-[220px]">
                                    <p class="text-[12px] leading-[18px] text-[#3E3E3E]">Total Payrol YTD: </p>
                                    <span class="text-[12px] leading-[18px] text-[#3E3E3E]">N$ <span class="font-semibold">0.00</span></span>
                                    </div>
                                </div>
                                <div class="w-full md:w-auto">
                                    <div class="inline-flex justify-between mb-[10px] w-full md:w-auto md:min-w-[220px]">
                                    <p class="text-[12px] leading-[18px] text-[#3E3E3E]">Income Payrol YTD: </p>
                                    <span class="text-[12px] leading-[18px] text-[#3E3E3E]">N$ <span class="font-semibold">0.00</span></span>
                                    </div>
                                </div>
                                <div class="w-full md:w-auto">
                                    <div class="inline-flex justify-between mb-[10px] w-full md:w-auto md:min-w-[220px]">
                                    <p class="text-[12px] leading-[18px] text-[#3E3E3E]">Benefit Contributions YTD: </p>
                                    <span class="text-[12px] leading-[18px] text-[#3E3E3E]">N$ <span class="font-semibold">0.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr class="bg-[#E4E4E4] mt-[20px] mb-[25px]"/>

                        <h3 class="text-[#003F6C] font-semibold text-[20px] leading-[30px] mb-[16px] md:mb-[30px]">New External Payment Recipient</h3>

                        <div class="grid grid-cols-12 gap-[15px] mb-[20px] items-center">
                            <div class="col-span-12 md:col-span-5">
                                <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Recipient Name*</label>
                                <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                            </div>
                            <div class="col-span-12 md:col-span-7 custom-select custom-select-full">
                                <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Country of the Bank*</label>
                                <select id="countries" class="bg-white w-full box-shadow select-custom outline-0 montserrat font-semibold text-[14px] leading-[17px] text-[#3E3E3E] text-sm rounded-[10px] block px-[14px] py-[10px] h-[46px]">
                                <option selected>All customers</option>
                                <option value="US">United States</option>
                                <option value="CA">Canada</option>
                                <option value="FR">France</option>
                                <option value="DE">Germany</option>
                                </select>
                            </div>
                        </div>

                        <div class="grid grid-cols-12 gap-[15px] mb-[20px] items-center">
                            <div class="col-span-12 md:col-span-5">
                                <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Bank Name*</label>
                                <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                            </div>
                            <div class="col-span-12 md:col-span-7">
                                <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Branch Name*</label>
                                <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                            </div>
                        </div>

                        <div class="grid grid-cols-12 gap-[15px] mb-[20px] items-center">
                            <div class="col-span-12 md:col-span-5">
                                <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Branch Code*</label>
                                <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                            </div>
                            <div class="col-span-12 md:col-span-7">
                                <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Account Number*</label>
                                <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                            </div>
                        </div>

                        <div class="grid grid-cols-12 gap-[15px] mb-[35px] items-center">
                            <div class="col-span-12 md:col-span-5">
                                <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Your Payment Reference*</label>
                                <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                            </div>
                            <div class="col-span-12 md:col-span-7">
                                <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Their Payment Reference*</label>
                                <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                            </div>
                        </div>

                        <div class="text-right flex items-end justify-end">
                            <button class="bg-[#003F6C] hover:bg-[#002743] w-full md:w-auto box-shadow text-white rounded-[10px] min-w-[180px] montserrat font-semibold text-[14px] leading-[17px] px-[37px] py-[15px]">Save</button>
                        </div>
                    </div>

                    <div id="tab4" class="hidden">
                        <div class="grid grid-cols-12 gap-[15px] mb-[33px]">
                            <div class="col-span-12 md:col-span-6">
                                <div class="rounded-[10px] px-[14px] py-[10px] bg-silver-light inline-block">
                                    <p class="mb-[10px] text-[12px] leading-[18px] text-[#3E3E3E]">Company: <span class="font-semibold">Test Company</span></p>
                                    <p class="mb-[0px] text-[12px] leading-[18px] text-[#3E3E3E]">Reg #: Test</p>
                                </div>
                            </div>
                            <div class="col-span-12 md:col-span-6 md:text-right">
                                <div class="w-full md:w-auto">
                                    <div class="inline-flex justify-between mb-[10px] w-full md:w-auto md:min-w-[220px]">
                                    <p class="text-[12px] leading-[18px] text-[#3E3E3E]">Total Payrol YTD: </p>
                                    <span class="text-[12px] leading-[18px] text-[#3E3E3E]">N$ <span class="font-semibold">0.00</span></span>
                                    </div>
                                </div>
                                <div class="w-full md:w-auto">
                                    <div class="inline-flex justify-between mb-[10px] w-full md:w-auto md:min-w-[220px]">
                                    <p class="text-[12px] leading-[18px] text-[#3E3E3E]">Income Payrol YTD: </p>
                                    <span class="text-[12px] leading-[18px] text-[#3E3E3E]">N$ <span class="font-semibold">0.00</span></span>
                                    </div>
                                </div>
                                <div class="w-full md:w-auto">
                                    <div class="inline-flex justify-between mb-[10px] w-full md:w-auto md:min-w-[220px]">
                                    <p class="text-[12px] leading-[18px] text-[#3E3E3E]">Benefit Contributions YTD: </p>
                                    <span class="text-[12px] leading-[18px] text-[#3E3E3E]">N$ <span class="font-semibold">0.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr class="bg-[#E4E4E4] mt-[20px] mb-[25px]"/>

                        <h3 class="text-[#003F6C] font-semibold text-[20px] leading-[30px] mb-[16px] md:mb-[30px]">New External Payment Recipient</h3>

                        <div class="grid grid-cols-12 gap-[15px] mb-[20px] items-center">
                            <div class="col-span-12 md:col-span-5">
                                <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Recipient Name*</label>
                                <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                            </div>
                            <div class="col-span-12 md:col-span-7 custom-select custom-select-full">
                                <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Country of the Bank*</label>
                                <select id="countries" class="bg-white w-full box-shadow select-custom outline-0 montserrat font-semibold text-[14px] leading-[17px] text-[#3E3E3E] text-sm rounded-[10px] block px-[14px] py-[10px] h-[46px]">
                                <option selected>All customers</option>
                                <option value="US">United States</option>
                                <option value="CA">Canada</option>
                                <option value="FR">France</option>
                                <option value="DE">Germany</option>
                                </select>
                            </div>
                        </div>

                        <div class="grid grid-cols-12 gap-[15px] mb-[20px] items-center">
                            <div class="col-span-12 md:col-span-5">
                                <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Bank Name*</label>
                                <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                            </div>
                            <div class="col-span-12 md:col-span-7">
                                <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Branch Name*</label>
                                <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                            </div>
                        </div>

                        <div class="grid grid-cols-12 gap-[15px] mb-[20px] items-center">
                            <div class="col-span-12 md:col-span-5">
                                <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Branch Code*</label>
                                <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                            </div>
                            <div class="col-span-12 md:col-span-7">
                                <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Account Number*</label>
                                <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                            </div>
                        </div>

                        <div class="grid grid-cols-12 gap-[15px] mb-[35px] items-center">
                            <div class="col-span-12 md:col-span-5">
                                <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Your Payment Reference*</label>
                                <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                            </div>
                            <div class="col-span-12 md:col-span-7">
                                <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Their Payment Reference*</label>
                                <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                            </div>
                        </div>

                        <div class="text-right flex items-end justify-end">
                            <button class="bg-[#003F6C] hover:bg-[#002743] w-full md:w-auto box-shadow text-white rounded-[10px] min-w-[180px] montserrat font-semibold text-[14px] leading-[17px] px-[37px] py-[15px]">Save</button>
                        </div>
                    </div>

                    <div id="tab5" class="hidden">
                        <div class="grid grid-cols-12 gap-[15px] mb-[33px]">
                            <div class="col-span-12 md:col-span-6">
                                <div class="rounded-[10px] px-[14px] py-[10px] bg-silver-light inline-block">
                                    <p class="mb-[10px] text-[12px] leading-[18px] text-[#3E3E3E]">Company: <span class="font-semibold">Test Company</span></p>
                                    <p class="mb-[0px] text-[12px] leading-[18px] text-[#3E3E3E]">Reg #: Test</p>
                                </div>
                            </div>
                            <div class="col-span-12 md:col-span-6 md:text-right">
                                <div class="w-full md:w-auto">
                                    <div class="inline-flex justify-between mb-[10px] w-full md:w-auto md:min-w-[220px]">
                                    <p class="text-[12px] leading-[18px] text-[#3E3E3E]">Total Payrol YTD: </p>
                                    <span class="text-[12px] leading-[18px] text-[#3E3E3E]">N$ <span class="font-semibold">0.00</span></span>
                                    </div>
                                </div>
                                <div class="w-full md:w-auto">
                                    <div class="inline-flex justify-between mb-[10px] w-full md:w-auto md:min-w-[220px]">
                                    <p class="text-[12px] leading-[18px] text-[#3E3E3E]">Income Payrol YTD: </p>
                                    <span class="text-[12px] leading-[18px] text-[#3E3E3E]">N$ <span class="font-semibold">0.00</span></span>
                                    </div>
                                </div>
                                <div class="w-full md:w-auto">
                                    <div class="inline-flex justify-between mb-[10px] w-full md:w-auto md:min-w-[220px]">
                                    <p class="text-[12px] leading-[18px] text-[#3E3E3E]">Benefit Contributions YTD: </p>
                                    <span class="text-[12px] leading-[18px] text-[#3E3E3E]">N$ <span class="font-semibold">0.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr class="bg-[#E4E4E4] mt-[20px] mb-[25px]"/>

                        <h3 class="text-[#003F6C] font-semibold text-[20px] leading-[30px] mb-[16px] md:mb-[30px]">New External Payment Recipient</h3>

                        <div class="grid grid-cols-12 gap-[15px] mb-[20px] items-center">
                            <div class="col-span-12 md:col-span-5">
                                <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Recipient Name*</label>
                                <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                            </div>
                            <div class="col-span-12 md:col-span-7 custom-select custom-select-full">
                                <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Country of the Bank*</label>
                                <select id="countries" class="bg-white w-full box-shadow select-custom outline-0 montserrat font-semibold text-[14px] leading-[17px] text-[#3E3E3E] text-sm rounded-[10px] block px-[14px] py-[10px] h-[46px]">
                                <option selected>All customers</option>
                                <option value="US">United States</option>
                                <option value="CA">Canada</option>
                                <option value="FR">France</option>
                                <option value="DE">Germany</option>
                                </select>
                            </div>
                        </div>

                        <div class="grid grid-cols-12 gap-[15px] mb-[20px] items-center">
                            <div class="col-span-12 md:col-span-5">
                                <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Bank Name*</label>
                                <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                            </div>
                            <div class="col-span-12 md:col-span-7">
                                <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Branch Name*</label>
                                <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                            </div>
                        </div>

                        <div class="grid grid-cols-12 gap-[15px] mb-[20px] items-center">
                            <div class="col-span-12 md:col-span-5">
                                <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Branch Code*</label>
                                <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                            </div>
                            <div class="col-span-12 md:col-span-7">
                                <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Account Number*</label>
                                <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                            </div>
                        </div>

                        <div class="grid grid-cols-12 gap-[15px] mb-[35px] items-center">
                            <div class="col-span-12 md:col-span-5">
                                <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Your Payment Reference*</label>
                                <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                            </div>
                            <div class="col-span-12 md:col-span-7">
                                <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Their Payment Reference*</label>
                                <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                            </div>
                        </div>

                        <div class="text-right flex items-end justify-end">
                            <button class="bg-[#003F6C] hover:bg-[#002743] w-full md:w-auto box-shadow text-white rounded-[10px] min-w-[180px] montserrat font-semibold text-[14px] leading-[17px] px-[37px] py-[15px]">Save</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php include('./footer.php');?>

<?php include('./footer-bot.php');?>