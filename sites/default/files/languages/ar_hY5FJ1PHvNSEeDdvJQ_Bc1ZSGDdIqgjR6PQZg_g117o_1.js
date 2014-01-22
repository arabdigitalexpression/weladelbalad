Drupal.locale = { 'pluralFormula': function ($n) { return Number((($n==1)?(0):(($n==0)?(1):(($n==2)?(2):(((($n%100)>=3)&&(($n%100)<=10))?(3):(((($n%100)>=11)&&(($n%100)<=99))?(4):5)))))); }, 'strings': {"":{"An AJAX HTTP error occurred.":"\u062d\u062f\u062b \u062e\u0637\u0623 \u0623\u062c\u0627\u0643\u0633 HTTP.","HTTP Result Code: !status":"\u0646\u062a\u064a\u062c\u0629 \u0643\u0648\u062f PHP: !status","An AJAX HTTP request terminated abnormally.":"\u062a\u0645 \u0625\u0646\u0647\u0627\u0621 \u0637\u0644\u0628 \u0623\u062c\u0627\u0643\u0633 HTTP \u0628\u0634\u0643\u0644 \u063a\u064a\u0631 \u0627\u0639\u062a\u064a\u0627\u062f\u064a.","Path: !uri":"\u0627\u0644\u0645\u0633\u0627\u0631: !uri","StatusText: !statusText":"\u0646\u0635 \u0627\u0644\u062d\u0627\u0644\u0629: !statusText","ResponseText: !responseText":"ResponseText: !responseText","ReadyState: !readyState":"ReadyState: !readyState","Show shortcuts":"\u0639\u0631\u0636 \u0627\u0644\u0627\u062e\u062a\u0635\u0627\u0631\u0627\u062a","Hide shortcuts":"\u0625\u062e\u0641\u0627\u0621 \u0627\u0644\u0627\u062e\u062a\u0635\u0627\u0631\u0627\u062a","Re-order rows by numerical weight instead of dragging.":"\u0625\u0639\u0627\u062f\u0629 \u062a\u0631\u062a\u064a\u0628 \u0627\u0644\u0623\u0633\u0637\u0631 \u0628\u062d\u0633\u0628 \u0627\u0644\u0623\u0648\u0632\u0627\u0646 \u0627\u0644\u0639\u062f\u062f\u064a\u0629 \u0628\u062f\u0644\u0627\u064b \u0639\u0646 \u0627\u0644\u0633\u062d\u0628.","Show row weights":"\u0625\u0638\u0647\u0627\u0631 \u0623\u0648\u0632\u0627\u0646 \u0627\u0644\u0623\u0633\u0637\u0631","Hide row weights":"\u0625\u062e\u0641\u0627\u0621 \u0623\u0648\u0632\u0627\u0646 \u0627\u0644\u0623\u0633\u0637\u0631","Drag to re-order":"\u0627\u0633\u062d\u0628 \u0644\u062a\u063a\u064a\u0631 \u0627\u0644\u062a\u0631\u062a\u064a\u0628","Changes made in this table will not be saved until the form is submitted.":"\u0627\u0644\u062a\u063a\u064a\u064a\u0631\u0627\u062a \u0627\u0644\u062d\u0627\u062f\u062b\u0629 \u0639\u0644\u0649 \u0647\u0630\u0627 \u0627\u0644\u062c\u062f\u0648\u0644 \u0644\u0646 \u062a\u064f\u062d\u0641\u0638 \u0625\u0644\u0627 \u0628\u0639\u062f \u0625\u0631\u0633\u0627\u0644 \u0627\u0644\u0627\u0633\u062a\u0645\u0627\u0631\u0629.","Hide":"\u0625\u062e\u0641\u0627\u0621","Show":"\u0639\u0631\u0636","Configure":"\u0627\u0636\u0628\u0637","OK":"\u0645\u0648\u0627\u0641\u0642","Please wait...":"\u0627\u0646\u062a\u0638\u0631 \u0645\u0646 \u0641\u0636\u0644\u0643...","(active tab)":"(\u0639\u0644\u0627\u0645\u0629 \u0627\u0644\u062a\u0628\u0648\u064a\u0628 \u0627\u0644\u0646\u0634\u0637\u0629)","Hide summary":"\u0625\u062e\u0641\u0627\u0621 \u0627\u0644\u0645\u0648\u062c\u0632","Edit summary":"\u062a\u0639\u062f\u064a\u0644 \u0627\u0644\u0645\u0644\u062e\u0635","Autocomplete popup":"\u0646\u0627\u0641\u0630\u0629 \u0627\u0644\u0625\u0643\u0645\u0627\u0644 \u0627\u0644\u062a\u0644\u0642\u0627\u0626\u064a"}} };