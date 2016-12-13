<link rel="stylesheet" href="<?php echo base_url('/static/admin/css/simplemde.min.css')?>">
<script src="<?php echo base_url('/static/admin/js/simplemde.min.js')?>"></script>


<!-- 内容区域 -->
        <div class="tpl-content-wrapper">

 
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-9">
                        <div class="page-header-heading"><span class="am-icon-clone page-header-heading-icon"></span> 新建文章 <small>New Article </small></div>
                        
                    </div>
                </div>

<div class="row">

<div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            
                            <div class="widget-body am-cf">

                                <form class="am-form tpl-form-border-form tpl-form-border-br" method="post" action="<?php echo site_url('admin/Articles/update')?>">
                                  
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-2 am-form-label">文章标题:</label>
                                        <div class="am-u-sm-4 am-u-sm-pull-6">
                                            <input class="am-sr-only" name="pv" value="1">
                                            <input type="text" class="tpl-form-input" name="title" placeholder="请输入标题文字" required>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-phone" class="am-u-sm-2 am-form-label">类别选择:</label>
                                        <div class="am-u-sm-4 am-u-sm-pull-6">
                                            <select data-am-selected="{btnWidth: '100%', btnSize: 'sm', btnStyle: 'primary'}" name="category">
                                              <?php foreach ($all_category as $key => $value): ?>
                                              <option value="<?php echo $value['id']?>"><?php echo $value['category']?></option>
                                              <?php endforeach; ?>
                                            </select>

                                        </div>

                                    </div>

                                    <div class="am-form-group">
                                        <label class="am-u-sm-2 am-form-label">标签、关键词:</label>
                                        <div class="am-u-sm-4 am-u-sm-pull-6">
                                            
                                            <input type="text" id="name" name="keyword" placeholder="多个关键词用,分割">
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label for="user-weibo" class="am-u-sm-2 am-form-label">文章描述:</label>
                                        <div class="am-u-sm-8 am-u-sm-pull-2">
                                            <input name="description" type="text" placeholder="请输入文章简要描述内容,">
                                            <div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label for="user-weibo" class="am-u-sm-2 am-form-label">封面配图:</label>
                                        <div class="am-u-sm-8 am-u-sm-pull-2">
                                            <input name="imagelink" type="text" placeholder="请输入图片(960*540效果最佳)链接地址如:http://www.xxx.com/img/pic.jpg">
                                            <div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-intro" class="am-u-sm-2 am-form-label">文章内容:</label>
                                       
                                    </div>
                                    <div class="am-form-group">
                                        
                                        <div class="am-u-sm-11 am-u-sm-push-1">
                                            <textarea id="textcontent" name="content" rows="21"></textarea>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <div class="am-u-sm-11 am-u-sm-push-1">
                                            <button type="submit" name='subimit' value="subimit" class="am-btn am-btn-primary am-btn-block tpl-btn-bg-color-success tpl-login-btn">发布</button>
                                        </div>
                                    </div>

                                    
    
                                </form>
                                <script>
                                          
                                          var simplemde = new SimpleMDE({element: document.getElementById("textcontent")});
                                    </script>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
        </div>
    </div>
    </div>
