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

                                <form class="am-form tpl-form-line-form" method="post" action="<?php echo site_url('admin/Articles/update')?>">
                                  
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-2 am-form-label">标题 <span class="tpl-form-line-small-title">Title</span></label>
                                        <div class="am-u-sm-10">
                                            <input type="text" class="tpl-form-input" name="title" placeholder="请输入标题文字" required>
                                        </div>

                                    </div>

                                    <div class="am-form-group">
                                        <label for="published_at" class="am-u-sm-2 am-form-label">发布时间 <span class="tpl-form-line-small-title">Time</span></label>
                                        <div class="am-u-sm-10">
                                            <input type="text" class="am-form-field" name="published_at" placeholder="发布时间" data-am-datepicker="" readonly>
                                            <small>发布时间为必填</small>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-phone" class="am-u-sm-2 am-form-label">类别选择 <span class="tpl-form-line-small-title">Category</span></label>
                                        <div class="am-u-sm-10">
                                            <select data-am-selected="{btnSize: 'sm'}" name="category">
                                              <?php foreach ($all_category as $key => $value): ?>
                                              <option value="<?php echo $value['id']?>"><?php echo $value['category']?></option>
                                              <?php endforeach; ?>
                                            </select>

                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label class="am-u-sm-2 am-form-label">标签 <span class="tpl-form-line-small-title">Tag</span></label>
                                        <div class="am-u-sm-10">
                                            <input type="text" id="name" name="tag" placeholder="多个标签请用英文","分离">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label class="am-u-sm-2 am-form-label">SEO关键字 <span class="tpl-form-line-small-title">Keyword</span></label>
                                        <div class="am-u-sm-10">
                                            
                                            <input type="text" id="name" name="keyword" placeholder="多个关键词用,分割">
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label for="user-weibo" class="am-u-sm-2 am-form-label">文章描述 <span class="tpl-form-line-small-title">Description</span></label>
                                        <div class="am-u-sm-10">
                                            <input name="description" type="text" placeholder="请输入SEO描述内容">
                                            <div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label for="user-weibo" class="am-u-sm-2 am-form-label">封面图 <span class="tpl-form-line-small-title">Images</span></label>
                                        <div class="am-u-sm-10">
                                            <input name="imagelink" type="text" placeholder="请输入图片链接地址如:http://www.xxx.com/img/pic.jpg">
                                            <div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-intro" class="am-u-sm-2 am-form-label">文章内容 <span class="tpl-form-line-small-title">Content</span></label>
                                        <div class="am-u-sm-10">
                                            <textarea id="textcontent" name="content" rows="21"></textarea>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <div class="am-u-sm-10 am-u-sm-push-2">
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
