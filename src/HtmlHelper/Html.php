<?php
namespace HtmlHelper;

class Html
{
	public static function fReturnText($texto = null)
	{
		echo $texto;
	}

	public static function fComment($texto = null)
	{
		echo "<!--\n" . $texto . "\n-->\n";
	}

	public static function fBr($n_linhas = 1)
	{
		$n_linhas = intval($n_linhas);
		if( $n_linhas <= 0 )
			$n_linhas = 0;

		echo str_repeat("<br>", $n_linhas)."\n";
	}

	public static function fSpan($texto = null, $id = null, $class = null, $style = null)
	{
		if (is_array($texto)) {
			$propriedades = $texto;
			$texto 	= isset($propriedades['texto']) ? $propriedades['texto'] : null;
			$id 	= isset($propriedades['id']) ? $propriedades['id'] : null;
			$class 	= isset($propriedades['class']) ? $propriedades['class'] : null;
			$style 	= isset($propriedades['style']) ? $propriedades['style'] : null;
		}

		$css = null;
		if( !empty($id) )
			$css = "id=\"$id\"";
		elseif( !empty($class) )
			$css = "class=\"$class\"";
		elseif( !empty($style) )
			$css = "style=\"$style\"";

		echo "<span $css>$texto</span>\n";
	}

	public static function fDiv($fecha = null, $id = null, $class = null, $style = null)
	{
		if( empty($fecha) OR is_array($fecha))
		{
			if (is_array($fecha)) {
				$propriedades = $fecha;
				$fecha 	= isset($propriedades['fecha']) ? $propriedades['fecha'] : null;
				$id 	= isset($propriedades['id']) ? $propriedades['id'] : null;
				$class 	= isset($propriedades['class']) ? $propriedades['class'] : null;
				$style 	= isset($propriedades['style']) ? $propriedades['style'] : null;
			}

			$css = null;
			if ( !empty($id) )
				$id = "id=\"$id\"";

			if ( !empty($class) )
				$class = "class=\"$class\"";

			if ( !empty($style) )
				$style = "style=\"$style\"";

			echo "<div $id $class $style>\n";
		}
		else
			echo "</div>\n";
	}

	public static function fImg($src, $alt, $height = null, $width = null, $border = null, $align = null, $name = null)
	{
		if (is_array($src)) {
			$propriedades = $src;
			$src 		= isset($propriedades['src']) ? $propriedades['src'] : '';
			$alt 		= isset($propriedades['alt']) ? $propriedades['alt'] : '';
			$height 	= isset($propriedades['height']) ? $propriedades['height'] : null;
			$width 		= isset($propriedades['width']) ? $propriedades['width'] : null;
			$border 	= isset($propriedades['border']) ? $propriedades['border'] : null;
			$align 		= isset($propriedades['align']) ? $propriedades['align'] : null;
			$name 		= isset($propriedades['name']) ? $propriedades['name'] : null;
		}

		if( !empty($height) )
			$height = "height=\"$height\"";

		if( !empty($width) )
			$width = "width=\"$width\"";

		if( !empty($border) )
			$border = "border=\"$border\"";

		if( !empty($align) )
			$align = "align=\"$align\"";

		if( !empty($name) )
			$name = "name=\"$name\" id=\"$name\"";

		echo "<img src=\"$src\" alt=\"$alt\" $height $width $border $align $name />\n";
	}

	public static function fA_Href($fecha = null, $href = "#", $target = null, $title = null, $class = null, $complemento = null)
	{
		if(empty($fecha) OR is_array($fecha))
		{
			if (is_array($fecha)) {
				$propriedades = $fecha;
				$href			= isset($propriedades['href']) ? $propriedades['href'] : '#';
				$target 		= isset($propriedades['target']) ? $propriedades['target'] : null;
				$title 			= isset($propriedades['title']) ? $propriedades['title'] : null;
				$class 			= isset($propriedades['class']) ? $propriedades['class'] : null;
				$complemento 	= isset($propriedades['complemento']) ? $propriedades['complemento'] : null;
			}

			if( !empty($target) )
				$target = "target=\"$target\"";

			if( !empty($title) )
				$title = "title=\"$title\"";

			if( !empty($class) )
				$class = "class=\"$class\"";

			echo "<a href=\"$href\" $target $title $class $complemento>\n";
		}
		else
			echo "</a>\n";
	}

	public static function fA_Name($fecha = null, $name, $class = null)
	{
		if( empty($fecha) OR is_array($fecha))
		{
			if (is_array($fecha)) {
				$propriedades = $fecha;
				$class = isset($propriedades['class']) ? $propriedades['class'] : null;
			}

			if( !empty($class) )
				$class = "class=\"$class\"";

			echo "<a name=\"$name\" $class>\n";
		}
		else
			echo "</a>\n";
	}

	public static function fTable($fecha = null, $border = null, $cellspacing = null, $cellpadding = null, $width = null, $class = null)
	{
		if( empty($fecha) OR is_array($fecha))
		{
			if (is_array($fecha)) {
				$propriedades = $fecha;
				$fecha = isset($propriedades['fecha']) ? $propriedades['fecha'] : null;
				$border = isset($propriedades['border']) ? $propriedades['border'] : null;
				$cellspacing = isset($propriedades['cellspacing']) ? $propriedades['cellspacing'] : null;
				$cellpadding = isset($propriedades['cellpadding']) ? $propriedades['cellpadding'] : null;
				$width = isset($propriedades['width']) ? $propriedades['width'] : null;
				$class = isset($propriedades['class']) ? $propriedades['class'] : null;
			}

			if( !empty($border) )
				$border = "border=\"$border\"";

			if( !empty($cellspacing) )
				$cellspacing = "cellspacing=\"$cellspacing\"";

			if( !empty($cellpadding) )
				$cellpadding = "cellpadding=\"$cellpadding\"";

			if( !empty($width) )
				$width = "width=\"$width\"";

			if( !empty($class) )
				$class = "class=\"$class\"";

			echo "<table $border $cellspacing $cellpadding $width $class>\n";
		}
		else
			echo "</table>\n";
	}

	public static function fTr($fecha = null, $align = null, $valign = null, $bgcolor = null, $class = null, $compl = null)
	{
		if( empty($fecha) OR is_array($fecha))
		{
			if (is_array($fecha)) {
				$propriedades = $fecha;
				$fecha = isset($propriedades['fecha']) ? $propriedades['fecha'] : null;
				$align = isset($propriedades['align']) ? $propriedades['align'] : null;
				$valign = isset($propriedades['valign']) ? $propriedades['valign'] : null;
				$bgcolor = isset($propriedades['bgcolor']) ? $propriedades['bgcolor'] : null;
				$class = isset($propriedades['class']) ? $propriedades['class'] : null;
				$compl = isset($propriedades['compl']) ? $propriedades['compl'] : null;
			}

			if( !empty($align) )
				$align = "align=\"$align\"";

			if( !empty($valign) )
				$valign = "valign=\"$valign\"";

			if( !empty($bgcolor) )
				$bgcolor = "bgcolor=\"$bgcolor\"";

			if( !empty($class) )
				$class = "class=\"$class\"";

			echo "<tr $align $valign $bgcolor $class $compl>\n";
		}
		else
			echo "</tr>\n";
	}

	public static function fTd($fecha = null, $colspan = null, $rowspan = null, $width = null, $align = null, $valign = null, $bgcolor = null, $nowrap = null, $class = null)
	{
		if( empty($fecha) OR is_array($fecha))
		{
			if (is_array($fecha)) {
				$propriedades = $fecha;
				$fecha = isset($propriedades['fecha']) ? $propriedades['fecha'] : null;
				$colspan = isset($propriedades['colspan']) ? $propriedades['colspan'] : null;
				$rowspan = isset($propriedades['rowspan']) ? $propriedades['rowspan'] : null;
				$width = isset($propriedades['width']) ? $propriedades['width'] : null;
				$align = isset($propriedades['align']) ? $propriedades['align'] : null;
				$valign = isset($propriedades['valign']) ? $propriedades['valign'] : null;
				$bgcolor = isset($propriedades['bgcolor']) ? $propriedades['bgcolor'] : null;
				$nowrap = isset($propriedades['nowrap']) ? $propriedades['nowrap'] : null;
				$class = isset($propriedades['class']) ? $propriedades['class'] : null;
			}

			if( !empty($colspan) )
				$colspan = "colspan=\"$colspan\"";

			if( !empty($rowspan) )
				$rowspan = "rowspan=\"$rowspan\"";

			if( !empty($width) )
				$width = "width=\"$width\"";

			if( !empty($align) )
				$align = "align=\"$align\"";

			if( !empty($valign) )
				$valign = "valign=\"$valign\"";

			if( !empty($bgcolor) )
				$bgcolor = "bgcolor=\"$bgcolor\"";

			if( $nowrap )
				$nowrap = 'nowrap="nowrap"';

			if( !empty($class) )
				$class = "class=\"$class\"";

			echo "<td $colspan $rowspan $width $align $valign $bgcolor $nowrap $class>\n";
		}
		else
			echo "</td>\n";
	}

	public static function fTh($fecha = null, $colspan = null, $rowspan = null, $width = null, $align = null, $valign = null, $bgcolor = null, $nowrap = null, $class = null)
	{
		if( empty($fecha) OR is_array($fecha))
		{
			if (is_array($fecha)) {
				$propriedades = $fecha;
				$fecha = isset($propriedades['fecha']) ? $propriedades['fecha'] : null;
				$colspan = isset($propriedades['colspan']) ? $propriedades['colspan'] : null;
				$rowspan = isset($propriedades['rowspan']) ? $propriedades['rowspan'] : null;
				$width = isset($propriedades['width']) ? $propriedades['width'] : null;
				$align = isset($propriedades['align']) ? $propriedades['align'] : null;
				$valign = isset($propriedades['valign']) ? $propriedades['valign'] : null;
				$bgcolor = isset($propriedades['bgcolor']) ? $propriedades['bgcolor'] : null;
				$nowrap = isset($propriedades['nowrap']) ? $propriedades['nowrap'] : null;
				$class = isset($propriedades['class']) ? $propriedades['class'] : null;
			}

			if( !empty($colspan) )
				$colspan = "colspan=\"$colspan\"";

			if( !empty($rowspan) )
				$rowspan = "rowspan=\"$rowspan\"";

			if( !empty($width) )
				$width = "width=\"$width\"";

			if( !empty($align) )
				$align = "align=\"$align\"";

			if( !empty($valign) )
				$valign = "valign=\"$valign\"";

			if( !empty($bgcolor) )
				$bgcolor = "bgcolor=\"$bgcolor\"";

			if( $nowrap )
				$nowrap = 'nowrap="nowrap"';

			if( !empty($class) )
				$class = "class=\"$class\"";

			echo "<th $colspan $rowspan $width $align $valign $bgcolor $nowrap $class>\n";
		}
		else
			echo "</th>\n";
	}

	public static function fForm($fecha = null, $name = 'form1', $method = 'post', $action = null, $target = null, $complemento = null)
	{
		if( empty($fecha) OR is_array($fecha))
		{
			if (is_array($fecha)) {
				$propriedades = $fecha;
				$fecha = isset($propriedades['fecha']) ? $propriedades['fecha'] : null;
				$name = isset($propriedades['name']) ? $propriedades['name'] : 'form1';
				$method = isset($propriedades['method']) ? $propriedades['method'] : 'post';
				$action = isset($propriedades['action']) ? $propriedades['action'] : null;
				$target = isset($propriedades['target']) ? $propriedades['target'] : null;
				$complemento = isset($propriedades['complemento']) ? $propriedades['complemento'] : null;
			}

			if( !empty($name) )
				$name = "name=\"$name\" id=\"$name\"";

			if( !empty($method) )
				$method = "method=\"$method\"";

			if( !empty($action) )
				$action = "action=\"$action\"";

			if( !empty($target) )
				$target = "target=\"$target\"";

			echo "<form $name enctype=\"multipart/form-data\" $action $method $target $complemento>\n";
		}
		else
			echo "</form>\n";
	}

	public static function fInputText($name, $value = null, $size = null, $maxlength = null, $readonly = null, $accesskey = null, $tabindex = null, $class = null, $complemento = null, $compl = null)
	{
		if (is_array($name)) {
			$propriedades = $name;
			$name = isset($propriedades['name']) ? $propriedades['name'] : '';
			$value = isset($propriedades['value']) ? $propriedades['value'] : null;
			$size = isset($propriedades['size']) ? $propriedades['size'] : null;
			$maxlength = isset($propriedades['maxlength']) ? $propriedades['maxlength'] : null;
			$readonly = isset($propriedades['readonly']) ? $propriedades['readonly'] : null;
			$accesskey = isset($propriedades['accesskey']) ? $propriedades['accesskey'] : null;
			$tabindex = isset($propriedades['tabindex']) ? $propriedades['tabindex'] : null;
			$class = isset($propriedades['class']) ? $propriedades['class'] : null;
			$complemento = isset($propriedades['complemento']) ? $propriedades['complemento'] : null;
			$compl = isset($propriedades['compl']) ? $propriedades['compl'] : null;
		}

		$value = "value=\"$value\"";

		if( !empty($size) )
			$size = "size=\"$size\"";

		if( !empty($maxlength) )
			$maxlength = "maxlength=\"$maxlength\"";

		if( $readonly )
			$readonly = 'readonly="readonly"';

		if( !empty($accesskey) )
			$accesskey = "accesskey=\"$accesskey\"";

		if( !empty($tabindex) )
			$tabindex = "tabindex=\"$tabindex\"";

		if( !empty($class) )
			$class = "class=\"$class\"";

		echo "<input type=\"text\" id=\"$name\" name=\"$name\" $value $size $maxlength $readonly $accesskey $tabindex $class $complemento> $compl\n";
	}

	public static function fInputPassword($name, $value = null, $size = null, $maxlength = null, $acceskey = null, $tabindex = null, $class = null, $complemento = null)
	{
		if (is_array($name)) {
			$propriedades = $name;
			$name = isset($propriedades['name']) ? $propriedades['name'] : '';
			$value = isset($propriedades['value']) ? $propriedades['value'] : null;
			$size = isset($propriedades['size']) ? $propriedades['size'] : null;
			$maxlength = isset($propriedades['maxlength']) ? $propriedades['maxlength'] : null;
			$acceskey = isset($propriedades['acceskey']) ? $propriedades['acceskey'] : null;
			$tabindex = isset($propriedades['tabindex']) ? $propriedades['tabindex'] : null;
			$class = isset($propriedades['class']) ? $propriedades['class'] : null;
			$complemento = isset($propriedades['complemento']) ? $propriedades['complemento'] : null;
		}

		if( !empty($value) )
			$value = "value=\"$value\"";

		if( !empty($size) )
			$size = "size=\"$size\"";

		if( !empty($maxlength) )
			$maxlength = "maxlength=\"$maxlength\"";

		if( !empty($acceskey) )
			$acceskey = "acceskey=\"$acceskey\"";

		if( !empty($tabindex) )
			$tabindex = "tabindex=\"$tabindex\"";

		if( !empty($class) )
			$class = "class=\"$class\"";

		echo "<input type=\"password\" name=\"$name\" $value $size $maxlength $acceskey $tabindex $class $complemento>\n";
	}

	public static function fInputCheckbox($name, $value = null, $checked = null, $class = null, $complemento = null, $defou = null)
	{
		if (is_array($name)) {
			$propriedades = $name;
			$name = isset($propriedades['name']) ? $propriedades['name'] : '';
			$value = isset($propriedades['value']) ? $propriedades['value'] : null;
			$checked = isset($propriedades['checked']) ? $propriedades['checked'] : null;
			$class = isset($propriedades['class']) ? $propriedades['class'] : null;
			$complemento = isset($propriedades['complemento']) ? $propriedades['complemento'] : null;
			$defou = isset($propriedades['defou']) ? $propriedades['defou'] : null;
		}

		if( $checked )
			$checked = 'checked=\"checked\"';
		elseif( $defou == $value && !empty( $defou ) )
			$checked = 'checked=\"checked\"';

		if( !empty($value) )
			$value = "value=\"$value\"";

		if( !empty($class) )
			$class = "class=\"$class\"";

		echo "<input type=\"checkbox\" name=\"$name\" $value $checked $class $complemento>\n";
	}

	public static function fInputRadio($name, $value = null, $checked = null, $class = null, $complemento = null, $defou = null)
	{
		if (is_array($name)) {
			$propriedades = $name;
			$name = isset($propriedades['name']) ? $propriedades['name'] : '';
			$value = isset($propriedades['value']) ? $propriedades['value'] : null;
			$checked = isset($propriedades['checked']) ? $propriedades['checked'] : null;
			$class = isset($propriedades['class']) ? $propriedades['class'] : null;
			$complemento = isset($propriedades['complemento']) ? $propriedades['complemento'] : null;
			$defou = isset($propriedades['defou']) ? $propriedades['defou'] : null;
		}

		if( $checked )
			$checked = 'checked=\"checked\"';
		elseif( $defou == $value && !empty( $defou ) )
			$checked = 'checked=\"checked\"';

		if( !empty($value) )
			$value = "value=\"$value\"";

		if( !empty($class) )
			$class = "class=\"$class\"";

		echo "<input type=\"radio\" name=\"$name\" $value $checked $class $complemento>\n";
	}

	public static function fInputSubmit($name, $value = 'Confirmar', $class = null, $complemento = null)
	{
		if (is_array($name)) {
			$propriedades = $name;
			$name = isset($propriedades['name']) ? $propriedades['name'] : '';
			$value = isset($propriedades['value']) ? $propriedades['value'] : 'Confirmar';
			$class = isset($propriedades['class']) ? $propriedades['class'] : null;
			$complemento = isset($propriedades['complemento']) ? $propriedades['complemento'] : null;
		}

		if( !empty($value) )
			$value = "value=\"$value\"";

		if( !empty($class) )
			$class = "class=\"$class\"";

		echo "<input type=\"submit\" name=\"$name\" $value $class $complemento>\n";
	}

	public static function fInputReset($name, $value = 'Limpar', $class = null, $complemento = null)
	{
		if (is_array($name)) {
			$propriedades = $name;
			$name = isset($propriedades['name']) ? $propriedades['name'] : '';
			$value = isset($propriedades['value']) ? $propriedades['value'] : 'Limpar';
			$class = isset($propriedades['class']) ? $propriedades['class'] : null;
			$complemento = isset($propriedades['complemento']) ? $propriedades['complemento'] : null;
		}

		if( !empty($value) )
			$value = "value=\"$value\"";

		if( !empty($class) )
			$class = "class=\"$class\"";

		echo "<input type=\"reset\" name=\"$name\" $value $class $complemento>\n";
	}

	public static function fInputFile($name, $size = null, $complemento = null)
	{
		if (is_array($name)) {
			$propriedades = $name;
			$name = isset($propriedades['name']) ? $propriedades['name'] : '';
			$size = isset($propriedades['size']) ? $propriedades['size'] : null;
			$complemento = isset($propriedades['complemento']) ? $propriedades['complemento'] : null;
		}

		if( !empty($size) )
			$size = "size=\"$size\"";

		echo "<input type=\"file\" name=\"$name\" $size $complemento>\n";
	}

	public static function fInputHidden($name, $value = null)
	{
		if (is_array($name)) {
			$propriedades = $name;
			$name = isset($propriedades['name']) ? $propriedades['name'] : '';
			$value = isset($propriedades['value']) ? $propriedades['value'] : null;
		}

		if( !empty($value) )
			$value = "value=\"$value\"";

		echo "<input type=\"hidden\" id=\"$name\" name=\"$name\" $value>\n";
	}

	public static function fInputButton($name, $value = 'Confirmar', $class = null, $complemento = null)
	{
		if (is_array($name)) {
			$propriedades = $name;
			$name = isset($propriedades['name']) ? $propriedades['name'] : '';
			$value = isset($propriedades['value']) ? $propriedades['value'] : 'Confirmar';
			$class = isset($propriedades['class']) ? $propriedades['class'] : null;
			$complemento = isset($propriedades['complemento']) ? $propriedades['complemento'] : null;
		}

		if( !empty($value) )
			$value = "value=\"$value\"";

		if( !empty($class) )
			$class = "class=\"$class\"";

		echo "<input type=\"button\" id=\"$name\" name=\"$name\" $value $class $complemento>\n";
	}

	public static function fTextarea($name, $value = null, $rows = null, $cols = null, $readonly = null, $acceskey = null, $tabindex = null, $class = null, $complemento = null)
	{
		if (is_array($name)) {
			$propriedades = $name;
			$name = isset($propriedades['name']) ? $propriedades['name'] : '';
			$value = isset($propriedades['value']) ? $propriedades['value'] : null;
			$rows = isset($propriedades['rows']) ? $propriedades['rows'] : null;
			$cols = isset($propriedades['cols']) ? $propriedades['cols'] : null;
			$readonly = isset($propriedades['readonly']) ? $propriedades['readonly'] : null;
			$acceskey = isset($propriedades['acceskey']) ? $propriedades['acceskey'] : null;
			$tabindex = isset($propriedades['tabindex']) ? $propriedades['tabindex'] : null;
			$class = isset($propriedades['class']) ? $propriedades['class'] : null;
			$complemento = isset($propriedades['complemento']) ? $propriedades['complemento'] : null;
		}

		if( !empty($rows) )
			$rows = "rows=\"$rows\"";

		if( !empty($cols) )
			$cols = "cols=\"$cols\"";

		if( $readonly )
			$readonly = 'readonly="readonly"';

		if( !empty($acceskey) )
			$acceskey = "acceskey=\"$acceskey\"";

		if( !empty($tabindex) )
			$tabindex = "tabindex=\"$tabindex\"";

		if( !empty($class) )
			$class = "class=\"$class\"";

		echo "<textarea name=\"$name\" $rows $cols $readonly $acceskey $tabindex $class $complemento>$value</textarea>\n";
	}

	public static function fSelect($fecha = null, $name = null, $size = null, $multiple = null, $class = null, $complemento = null)
	{
		if( empty($fecha) OR is_array($fecha))
		{
			if (is_array($fecha)) {
				$propriedades = $fecha;
				$fecha = isset($propriedades['fecha']) ? $propriedades['fecha'] : null;
				$name = isset($propriedades['name']) ? $propriedades['name'] : null;
				$size = isset($propriedades['size']) ? $propriedades['size'] : null;
				$multiple = isset($propriedades['fecha']) ? $propriedades['fecha'] : null;
				$class = isset($propriedades['class']) ? $propriedades['class'] : null;
				$complemento = isset($propriedades['complemento']) ? $propriedades['complemento'] : null;
			}

			if( !empty($size) )
				$size = "size=\"$size\"";

			if( $multiple )
				$multiple = 'multiple="multiple"';

			if( !empty($class) )
				$class = "class=\"$class\"";

			echo "<select name=\"$name\" id=\"$name\" $size $multiple $class $complemento>\n";
		}
		else
			echo "</select>\n";
	}

	public static function fOption($texto = null, $value = null, $selected = null, $class = null, $complemento = null)
	{
		if (is_array($texto)) {
			$propriedades = $texto;
			$texto = isset($propriedades['texto']) ? $propriedades['texto'] : null;
			$value = isset($propriedades['value']) ? $propriedades['value'] : null;
			$selected = isset($propriedades['selected']) ? $propriedades['selected'] : null;
			$class = isset($propriedades['class']) ? $propriedades['class'] : null;
			$complemento = isset($propriedades['complemento']) ? $propriedades['complemento'] : null;
		}

		if( !empty($value) )
			$value = "value=\"$value\"";

		if( $selected )
			$selected = 'selected="selected"';

		if( !empty($class) )
			$class = "class=\"$class\"";

		echo "<option $value $selected $class $complemento>$texto</option>\n";
	}

	public static function fInputNumber($name, $value = null, $size = null, $maxlength = null, $readonly = null, $min = null, $max = null, $step = null, $class = null, $complemento = null, $compl = null)
	{
		if (is_array($name)) {
			$propriedades = $name;
			$name = isset($propriedades['name']) ? $propriedades['name'] : null;
			$value = isset($propriedades['value']) ? $propriedades['value'] : null;
			$size = isset($propriedades['size']) ? $propriedades['size'] : null;
			$maxlength = isset($propriedades['maxlength']) ? $propriedades['maxlength'] : null;
			$readonly = isset($propriedades['readonly']) ? $propriedades['readonly'] : null;
			$min = isset($propriedades['min']) ? $propriedades['min'] : null;
			$max = isset($propriedades['max']) ? $propriedades['max'] : null;
			$step = isset($propriedades['step']) ? $propriedades['step'] : null;
			$class = isset($propriedades['class']) ? $propriedades['class'] : null;
			$complemento = isset($propriedades['complemento']) ? $propriedades['complemento'] : null;
			$compl = isset($propriedades['compl']) ? $propriedades['compl'] : null;
		}

		$value = "value=\"$value\"";

		if( !empty($size) )
			$size = "size=\"$size\"";

		if( !empty($maxlength) )
			$maxlength = "maxlength=\"$maxlength\"";

		if( $readonly )
			$readonly = 'readonly="readonly"';

		if( !empty($min) )
			$min = "min=\"$min\"";

		if( !empty($max) )
			$max = "max=\"$max\"";

		if( !empty($step) )
			$step = "step=\"$step\"";

		if( !empty($class) )
			$class = "class=\"$class\"";

		echo "<input type=\"number\" id=\"$name\" name=\"$name\" $value $size $maxlength $readonly $min $max $step $class $complemento> $compl\n";
	}

	public static function fScripts($scripts = "")
	{
		echo "<script>" . $scripts . "</script>";
	}

	public static function fStyles($styles = "")
	{
		echo "<style>" . $styles . "</style>";
	}
}
