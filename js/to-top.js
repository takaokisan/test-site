// グローバル変数
var timeout = null ;

// 一連の処理
$( function()
{
	$( window ).scroll( function()
	{
		// 1秒ごとに処理
		if( timeout == null )
		{
			// セットタイムアウトを設定
			timeout = setTimeout( function(){
				// 対象のエレメント
				var element = $( '#page-top' ) ;
				var visible = element.is( ':visible' ) ;
				var now = $( window ).scrollTop() ;
				var under = $( 'body' ).height() - ( now + $(window).height() ) ;
				if( now > 300 && 0 < under )
				{
					// 非表示状態だったら
					if( !visible )
					{
						element.fadeIn( 'slow' ) ;
					}
				}
				// 表示状態だったら
				else if( visible )
				{
					element.fadeOut( 'slow' ) ;
				}
				// フラグを削除
				timeout = null ;
			} , 1000 ) ;
		}
	} ) ;

	// クリックイベントを設定する
	$( '#move-page-top' ).click(
		function()
		{
			// スムーズにスクロールする
			$( 'html,body' ).animate( {scrollTop:0} , 'slow' ) ;
		}
	) ;
} ) ;