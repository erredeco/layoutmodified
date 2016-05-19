# layoutmodified
TYPO3 extension to alter the tt_content layout field behavior

## usage
* install extension
* add TS (include static from extension) BEFORE bhsiteconf
* This extension DON'T ADD any values to layout on the TYPO3 Backend! This means that the values saved will be by default "0", "1", "2"
  It is up to you to write the proper Page TSConfig
  
An example:

```
TCEFORM {
	tt_content {
		layout {
	        //remove in general
	        removeItems = 1,2,3
	        disableNoMatchingValueElement = 1
	        types {

	        	//textmedia
	        	textmedia {
            removeItems = 0,1,2,3
				    addItems {
					     stileprova1 = LLL:EXT:bhsiteconf/Resources/Private/Language/locallang_db.xlf:textmedia.layout.style1
					     stileprova2 = LLL:EXT:bhsiteconf/Resources/Private/Language/locallang_db.xlf:textmedia.layout.style2
					     }

	        	}
	        }
		}
	}
}


```  
  
