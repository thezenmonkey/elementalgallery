<div class="content-element__content <% if $Style %>$CssStyle<% end_if %>">
	<% if $ShowTitle %>
        <h2 class="content-element__title">$Title</h2>
    <% end_if %>
    $HTML
	<% if $Images %>
		<div>
			<% loop $Images.Sort('SortOrder') %>
				<a href="$URL">$FillMax(200,200)</a>
			<% end_loop %>
		</div>
	<% end_if %>
</div>
