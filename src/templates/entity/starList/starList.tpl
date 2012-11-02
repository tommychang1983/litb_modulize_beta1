{function name=starList}
<span class="star stars{$prodDetail.starValue}" >
	<em> {$prodDetail.starValue} stars of {$prodDetail.totalStarValue}</em>
</span>
<a href="{$prodDetail.urlDetailPage}#have_reviews" onclick ="showDetail();return void();">{$prodDetail.reviewCount}</a>
{/function}