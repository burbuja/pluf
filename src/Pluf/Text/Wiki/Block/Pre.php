<?php
/* -*- tab-width: 4; indent-tabs-mode: nil; c-basic-offset: 4 -*- */
/*
# ***** BEGIN LICENSE BLOCK *****
# This file is part of Plume Framework, a simple PHP Application Framework.
# Copyright (C) 2001-2007 Loic d'Anterroches and contributors.
#
# Plume Framework is free software; you can redistribute it and/or modify
# it under the terms of the GNU Lesser General Public License as published by
# the Free Software Foundation; either version 2.1 of the License, or
# (at your option) any later version.
#
# Plume Framework is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU Lesser General Public License for more details.
#
# You should have received a copy of the GNU Lesser General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
#
# ***** END LICENSE BLOCK ***** */

/*
 * Based on Wiki Renderer copyright (C) 2003-2004 Laurent Jouanneau
 * http://ljouanneau.com/softs/wikirenderer/
 */

/**
 * traite les signes de type pre
 */
class Pluf_Text_Wiki_Block_Pre extends Pluf_Text_Wiki_BlockRenderer
{
    function __construct($wr) 
    {
        parent::__construct($wr);
        $this->type      = 'pre';
        $this->regexp    = "/^ (.*)/";
        $this->_openTag  = '<pre>';
        $this->_closeTag ='</pre>';
    }

    function getRenderedLine() 
    {
        return $this->_renderInlineTag($this->_detectMatch[1]);
    }

}
