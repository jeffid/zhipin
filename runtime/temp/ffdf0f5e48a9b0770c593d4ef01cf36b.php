<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:85:"D:\APP\wamp\www\XDL\zhipin\public/../application/home\view\resume\adventage_edit.html";i:1525657602;}*/ ?>
<form data-action="/employee/resumeAdventageEditExec" method="post" class="form-resume" data-form="form-adv-edit">
    <h3 class="title">我的优势</h3>
    <div class="form-row row-area item-form-through">
        <dl>
            <dd>
                <textarea placeholder="例如：两年UI设计经验，熟悉IOS和Android的界面设计规范，对产品本色有独特见解，有一定的手绘基础"
                          class="ipt ipt-area required" data-range="1,140" data-blank="不能为空"
                          data-format="请输入 140 个以内的文字"  maxlength="276" name="adventage"><?php echo isset($ad_text)?$ad_text:''; ?></textarea>
                <span class="count-num"><em>4</em>/140</span>
            </dd>
        </dl>
    </div>
    <div class="form-btns">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <button class="btn btn-back" type="button" ka="user-resume-desc-edit-cancel" data-func="func-cancel">取消</button>
        <button class="btn" type="submit" ka="user-resume-desc-edit-ok">完成</button>
    </div>
</form>